<?php
    session_start();
    require_once("../../inc/php/db_connection.php");

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    //$keepConn = $_POST['RestaConnesso'];

    $emptyFieldDetected = false;
    if(empty($email) or empty($pass)){
        $emptyFieldDetected = true;
    }

    //Output error in case of empty fields
    if($emptyFieldDetected){
        echo '
                  <p>Riempi i campi</p>
                  <a type="button" href="../../../index.php" class="btn btn-outline-danger">Ok</a>

        ';
    }

    $q = "SELECT Email, Password
            FROM users
           WHERE '$email' = Email
             AND Priviledge = 'ADMIN'";
    $result = mysqli_query($conn, $q);
    mysqli_close($conn);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
            if(password_verify($pass,$row['user_pass'])){
                $_SESSION['AdminEmail'] = $email;
                $_SESSION['AdminPass'] = $pass;
                header("Location:../main.php");
            }
            else
            {
            echo '<p>Password o email errate</p>
                  <a type="button" href="../../index.php" class="btn btn-outline-danger" data-dismiss="modal">Ok</a>';
        	}
        }
    } else {
        echo'
                  <p>Password o email errate</p>
                  <a type="button" href="../../index.php" class="btn btn-outline-danger" data-dismiss="modal">Ok</a>

        ';
        
    }

    function logIn(){
        require_once("../../inc/php/db_connection.php");

        if(isset($_SESSION['AdminEmail']) && isset($_SESSION['AdminPass'])){
            $adminEmail = $_SESSION['AdminEmail'];
            $q = "SELECT user_email, user_pass
            FROM users
           WHERE '$adminEmail' = user_email
             AND priviledge = 'ADMIN'";
            
        }
        $result = mysqli_query($conn, $q);
        mysqli_close($conn);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)){
                if(password_verify($_SESSION['AdminPass'],$row['user_pass'])){
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