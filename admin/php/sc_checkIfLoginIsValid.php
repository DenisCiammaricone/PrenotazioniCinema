<?php
    function logIn(){
        session_start();
        require_once("../inc/php/db_connection.php");

        if(isset($_SESSION['AdminEmail']) && isset($_SESSION['AdminPass'])){
            $adminEmail = $_SESSION['AdminEmail'];
            $q = "SELECT Email, Password
            FROM users
           WHERE '$adminEmail' = Email
             AND Priviledge = 'ADMIN'";
            $result = mysqli_query($conn, $q);
            mysqli_close($conn);
        }
        

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)){
                if(password_verify($_SESSION['AdminPass'],$row['Password'])){
                    return true;
                }
                else
                {
                    echo '<p>Password o email errate</p>';
                    return false;
                }
            }
        } else {
            echo '<p>Password o email errate</p>';
            return false;
        }
        return false;
    }
?>