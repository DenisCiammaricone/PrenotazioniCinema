<?php
    require_once("../db_connection.php");

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    
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
           WHERE '$email' = user_email";
    $result = mysqli_query($conn, $q);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
            if(password_verify($pass,$row['user_pass'])){
                header("Location:../../../index.php");
            } else{
                echo('
                    <script type="text/javascript">
                        alert("Password non corretta... Riprova!");
                    </script>
                ');
            }
        }
    } else {
        echo('
            <script type="text/javascript">
                alert("Nessun utente registrato con questa e-mail... Riprova!");
            </script>
        ');
        
        header("Location:../../html/login.php");
    }
?>