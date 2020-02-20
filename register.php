<!DOCTYPE html>
<html lang="it"> 

    <head>
        <title>Registrati</title>

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
        <form id="registerForm" method="post" action="../php/loginSystem/sc_register.php">
            <label for="name">* Nome</label><br>
            <input type="text" id="name" name="name"><br><br>
            <label for="surname">* Cognome</label><br>
            <input type="text" id="surname" name="surname"><br><br>
            <label for="email">* E-Mail</label><br>
            <input type="email" id="email" name="email"><br><br>
            <label for="pass">* Password</label><br>
            <input type="password" id="pass" name="pass"><br><br>
            <label for="confirmPass">* Conferma Password</label><br>
            <input type="password" id="confirmPass" name="confirmPass"><br><br>
            <input type="checkbox" id="confirmTerms" name="confirmTerms">
            <label for="confirmTerms">* Accetto i termini di utilizzo</label><br><br>
            <input type="button" onClick="checkRegisterForm();" value="Registrati">
        </form>

    </body>

</html>