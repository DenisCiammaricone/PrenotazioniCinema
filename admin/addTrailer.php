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
       
        <form id="aggiungiSpettacoli" method="post" action="php/sc_addTrailer.php" enctype="multipart/form-data">
            <label for="film">Film: </label>
            <select id="film" name="film">
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
                    $q = "SELECT PK_CodF, Titolo FROM elenco_film";
                    $result = mysqli_query($conn, $q);
                    mysqli_close($conn);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                            echo ('
                                <option value="'.$row['PK_CodF'].'">'.$row['Titolo'].'</option>
                            ');
                        }
                    } else {
                        echo ('
                            <option>Nessun elemento trovato</option>
                        ');
                    }
                ?>
            </select><br><br>
            
            <label for="Trailer">Trailer:</label>
            <input type="text" id="Trailer" name="Trailer">
            
            <input type="submit" value="Aggiungi Spettacolo">
        </form>
       
    </body>
<html>