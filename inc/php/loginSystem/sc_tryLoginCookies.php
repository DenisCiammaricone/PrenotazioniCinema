<?php
    function checkConn(){
        session_start();
        require_once("../db_connection.php");

        if(isset($_COOKIE['email']) && isset($_COOKIE['pass'])){
            $email = $_COOKIE['email'];
            $pass = $_COOKIE['pass'];
            echo($email." ".$pass);
            $q = "SELECT user_email, user_pass
                FROM users
            WHERE '$email' = user_email";
            $result = mysqli_query($conn, $q);
            mysqli_close($conn);
            
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)){
                    if(password_verify($pass,$row['user_pass'])){
                        //header("Location:../../../index.php");
                        $_SESSION["logged"] = "true";
                        return true;
                    } else{
                        echo '
                            <script type="text/javascript">
                                alert("Errore di LogIn Automatico!");
                            </script>
                        ';
                        header("Location:../../../index.php");
                        $_SESSION["logged"] = "false";
                        return false;
                    }
                }
            } else {
                echo'
                    <script type="text/javascript">
                        alert("Errore di LogIn Automatico!");
                    </script>
                ';
                
                header("Location:../../../index.php");
                $_SESSION["logged"] = "false";
                return false;
            }
        }
        return false;
    }
?>