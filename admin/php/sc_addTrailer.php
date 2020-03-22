<?php
header('Content-type: text/html; charset=UTF-8');
    require_once("../../inc/php/db_connection.php");

    
    $codiceFilm = $_POST['film'];
    $link = $_POST['Trailer'];

    //Query per caricamento in Elenco Film
    $q = "INSERT INTO Trailer VALUES (NULL, '$link', $codiceFilm)";
    mysqli_query($conn, $q);
                
    mysqli_close($conn);
    
?>