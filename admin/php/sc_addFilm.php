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
    $q = "SELECT PK_CodG FROM GeneriFilm WHERE Nome = $genere";
    $result = mysqli_query($conn, $q);

    $codiceGenere = -1;
    $codiceRegista = -1;
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
            $codiceGenere = $row['PK_CodG'];
        }
        if($codiceGenere >= 0){
            $q = "SELECT PK_CodR FROM RegistiFilm WHERE Nome = $nomeReg AND Cognome = $cognReg";
            $result = mysqli_query($conn, $q);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)){
                    $codiceRegista = $row['PK_CodR'];
                }
                if($codiceRegista >= 0){
                    //Query per caricamento in Elenco Film
                    $q = "INSERT INTO Elenco_Film";
                    $result = mysqli_query($conn, $q);
                }
            }

        } else {
            echo('
                <script>alert("Nessun genere con questo nome è stato trovato");</script>
            ');
        }
    } else {
        echo('
            <script>alert("Nessun genere con questo nome è stato trovato");</script>
        ');
    }
    mysqli_close($conn);
    
?>