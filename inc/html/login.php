<!DOCTYPE html>
<html lang="it"> 

    <head>
        <title>Log In</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        
        <link href="../../inc/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="../../inc/js/bootstrap.min.js" type="text/javascript"></script>


        <link href="../../inc/css/style.css" rel="stylesheet" type="text/css">
        <script src="../../inc/js/script.js" type="text/javascript"></script>
        <script src="../../inc/js/formVerification.js" type="text/javascript"></script>
    </head>

    <body>
        <form id="loginForm" method="post" action="../php/loginSystem/sc_login.php">
            <label for="email">E-Mail</label><br>
            <input type="email" id="email" name="email"><br><br>
            <label for="pass">Password</label><br>
            <input type="password" id="pass" name="pass"><br><br>
            <input type="button" onClick="checkLoginForm();" value="Accedi">
        </form>

    </body>

</html>