<?php

    require_once("../inc/php/db_connection.php");



    $q = "SELECT Nome
            FROM GenereFilm";
    $result = mysqli_query($conn, $q);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
            echo('
                <option value="'.$row['Nome'].'">'.$row['Nome'].'</option>
            ');
        }
    } else {
        echo('
                <option value="empty">Nessun genere trovato</option>
        ');
    }
    mysqli_close($conn);
?>