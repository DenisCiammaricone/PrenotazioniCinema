<?php
    require_once("../db_connection.php");

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    $keepConn = $_POST['RestaConnesso'];

    $emptyFieldDetected = false;
    if(empty($email) or empty($pass)){
        $emptyFieldDetected = true;
    }

    //Output error in case of empty fields
    if($emptyFieldDetected){
        echo '
            <script type="text/javascript">
                alert("Errore nella creazione utente... Riprova! Reindirizzamento...");
            </script>
        ';
        header("Location:../../../index.php;refresh:5");
        exit();
    }

    $q = "SELECT user_email, user_pass
            FROM users
           WHERE '$email' = user_email";
    $result = mysqli_query($conn, $q);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
            if(password_verify($pass,$row['user_pass'])){
                //Cookies last 10day 
                if(isset($keepConn)){
                    setcookie("email", $email, time() + (86400 * 10), "/");
                    setcookie("pass", $pass, time() + (86400 * 10), "/");
                }
                header("Location:../../../index.php;refresh:5");
            } else{
                echo '
                    <script type="text/javascript">
                        alert("Password non corretta... Riprova!");
                    </script>
                ';
            }
        }
    } else {
        echo'
            <script type="text/javascript">
                alert("Nessun utente registrato con questa e-mail... Riprova!");
            </script>
        ';
        
        header("Location:../../../index.php;refresh:5");
    }
?>