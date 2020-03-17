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
       
        <form id="aggiungiSpettacoli" method="post" action="php/sc_addSpettacoli.php" enctype="multipart/form-data">
            <label for="sala">Numero sala: </label>
            <input type="text" id="sala" name="sala"><br><br>
            <label for="orario">Orario: </label>
            <input type="time" id="orario" name="orario"><br><br>
            <label for="costo">Costo: </label>
            <input type="number"  id="costo" name="costo"><br><br>
            <label for="film">Film: </label>
            <select id="film" name="film">
                <?php
                    $ip = "localhost";
                    $user = "root";
                    $pass = "";
                    $db = "my_gruppo1";
                    
                    try {
                        $conn = mysqli_connect($ip,$user,$pass,$db);
                    } catch(Exception $e){
                        console.log('Problema di connessione: ("'.$e.'")');
                    }
                    $q = "SELECT Titolo FROM elenco_film";
                    $result = mysqli_query($conn, $q);
                    mysqli_close($conn);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                            echo ('
                                <option value="'.$row['Titolo'].'">'.$row['Titolo'].'</option>
                            ');
                        }
                    } else {
                        echo ('
                            <option>Nessun elemento trovato</option>
                        ');
                    }
                ?>
            </select><br><br>
            
            <input type="submit" value="Aggiungi Spettacolo">
        </form>
       
    </body>
<html>