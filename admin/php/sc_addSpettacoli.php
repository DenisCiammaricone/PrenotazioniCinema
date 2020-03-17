<?php
header('Content-type: text/html; charset=UTF-8');
    require_once("../../inc/php/db_connection.php");

    $sala = $_POST['sala'];
    $orario = $_POST['orario'];
    $costo = $_POST['costo'];
   
   
    //PRendi i codici del Genere e del Nome e Cognome del Regista
    $q = "SELECT PK_Codf FROM elenco_film WHERE Titolo = '$Titolo'";
    $result = mysqli_query($conn, $q);

    $codiceFilm = -1;
  
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
            $codiceFilm = $row['PK_CodF'];
        }
        if($codiceFilm > 0){
            
            $q = "SELECT PK_CodF FROM elenco_film WHERE  1";
            $result = mysqli_query($conn, $q);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)){
                    $codiceFilm = $row['PK_CodF'];
                }
                if($codicefilm > 0){
                	$conn->query("SET NAMES utf8");
                    //Query per caricamento in Elenco Film
                    $q = "INSERT INTO spettacoli VALUES (NULL, '$sala','$orario','$costo', $codicefilm)";
                    $result = mysqli_query($conn, $q);
                }
              
            }
            
        } else {
            echo('
                <script>alert("Nessun film con questo nome è stato trovato");</script>
            ');
        }
    } 
    mysqli_close($conn);
    
?>