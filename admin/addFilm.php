<!doctype html>
<html lang="it">
    <head>
        <title>Admin | Main</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../inc/js/popper.min.js" type="text/javascript"></script>
        
        <link href="../inc/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="../inc/js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <?php 
            include 'php/sc_checkIfLoginIsValid.php';
            if(!logIn())
                header("Location: /index.php");
        ?>
       
        <form id="aggiungiFilm" method="post" action="php/sc_addFilm.php" enctype="multipart/form-data">
            <label for="titolo">Titolo: </label>
            <input type="text" id="titolo" name="titolo"><br><br>
            <label for="descr">Descrizione: </label>
            <input type="text"  id="descr" name="descr"><br><br>
            <label for="locandina">Locandina: </label>
            <input type="file"  id="locandina" name="locandina"><br><br>
            <label for="durata">Durata: </label>
            <input type="number"  id="durata" name="durata"><br><br>
            <label for="genere">Genere: </label>
            <select id="genere" name="genere">
                <?php
                    $ip = "localhost";
                    $user = "root";
                    $pass = "";
                    $db = "my_cinemagoosebumps";
                    
                    try {
                        $conn = mysqli_connect($ip,$user,$pass,$db);
                    } catch(Exception $e){
                        console.log('Problema di connessione: ("'.$e.'")');
                    }
                    $q = "SELECT Nome FROM generifilm";
                    $result = mysqli_query($conn, $q);
                    mysqli_close($conn);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                            echo ('
                                <option value="'.$row['Nome'].'">'.$row['Nome'].'</option>
                            ');
                        }
                    } else {
                        echo ('
                            <option>Nessun elemento trovato</option>
                        ');
                    }
                ?>
            </select><br><br>
            <label for="nomeRegista">Nome Regista: </label>
            <input type="text"  id="nomeRegista" name="nomeRegista"><br><br>
            <label for="cognomeRegista">Cognome Regista: </label>
            <input type="text"  id="cognomeRegista" name="cognomeRegista"><br><br>
            
            <input type="submit" value="Aggiungi Film">
        </form>
       
    </body>
<html>