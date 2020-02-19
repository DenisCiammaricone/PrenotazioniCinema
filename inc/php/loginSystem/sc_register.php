<?php
    require_once("../db_connection.php");

    $fields = array('name','surname','email','pass', 'confirmPass', 'confirmTerms');
    
    //Check for special characters
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $surname = mysqli_real_escape_string($conn,$_POST['surname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);

    //Check for empty fields
    $emptyFieldDetected= false;
    foreach($fields as $needed){
        if(empty($_POST[$needed])){
            $emptyFieldDetected = true;
        }
    }

    //Output error in case of empty fields
    if($emptyFieldDetected){
        echo('
            <script type="text/javascript">
                alert("Errore nella creazione utente... Riprova! Reindirizzamento...");
            </script>
        ');
        header("Location:../../html/register.html");
        exit();
    }

    //Query to add a ner user as a record
    $q = "INSERT INTO users ('name','username','email','pass')
                     VALUES ('$name','$surname','$email','$pass')";
    $result = mysqli_query($conn, $q);

    mysqli_close($conn);
?>