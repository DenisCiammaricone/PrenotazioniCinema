<?php
    require_once("../inc/php/db_connection.php");

    $titolo = $_POST['titolo'];
    $descr = $_POST['descr'];
    $durata = $_POST['durata'];
    $locandina = $_FILES['locandina']['name'];
    $genere = $_POST['genere'];
    $nomeReg = $_POST['nomeRegista'];
    $cognReg = $_POST['cognomeRegista'];

    $dirLocandine = "../locandine/";
    $fileName = $dirLocandine.basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES['locandina']['tmp_name'], $fileName)) {
        echo "File caricato con successo.";
    } else {
        echo "Errore Caricamento locandina";
    }

    //PRendi i codici del Genere e del Nome e Cognome del Regista

    //Query per caricamento in Elenco Film
    $q = "INSERT INTO Elenco_Film";
    $result = mysqli_query($conn, $q);
    mysqli_close($conn);
    
?>