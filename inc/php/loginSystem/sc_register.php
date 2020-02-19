<?php
    require_once("../db_connection.php");

    $fields = array('name','surname','email','pass', 'confirmTerms', 'confirmTerms');

    $emptyFieldDetected= false;
    foreach($fields as $needed){
        if(empty($_POST[$needed])){
            $emptyFieldDetected = true;
        }
    }

    if($emptyFieldDetected){
        echo('
            <script type="text/javascript">
                alert("Errore nella creazione utente... Riprova! Reindirizzamento...");
            </script>
        ');
        header("Location:../../html/register.html");
        exit();
    }

    

?>