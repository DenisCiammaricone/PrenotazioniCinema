<?php
    require_once("../db_connection.php");

    if(isset($_COOKIE['email']) && isset($_COOKIE['pass'])){
        $q = "SELECT user_email, user_pass
            FROM users
           WHERE '".$_COOKIE['email']."' = user_email";
        $result = mysqli_query($conn, $q);

        echo '
        <script type="text/javascript">
            alert('.$_COOKIE['email'].');
        </script>
    ';

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)){
                if(password_verify($_COOKIE['pass'],$row['user_pass'])){
                    header("Location:../../../index.php");
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
    } else {

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
    }

?>