<?php
    require_once("../db_connection.php");

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = password_hash(mysqli_real_escape_string($conn,$_POST['pass']), PASSWORD_DEFAULT);
    
    $emptyFieldDetected = false;
    if(empty($email) or empty($pass)){
        $emptyFieldDetected = true;
    }

    //Output error in case of empty fields
    if($emptyFieldDetected){
        echo('
            <script type="text/javascript">
                alert("Errore nella creazione utente... Riprova! Reindirizzamento...");
            </script>
        ');
        header("Location:../../html/register.php");
        exit();
    }

    $q = "SELECT user_email, user_pass
            FROM users
           WHERE '$email' = user_email AND '$pass' = user_pass";
    $result = mysqli_query($conn, $q);

    if (mysqli_num_rows($result) > 0) {
        header("Location:../../../index.php");
    } else {
        //header("Location:../../html/login.php");
        echo("Errore! ".$pass);
    }
?>