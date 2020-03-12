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

?>