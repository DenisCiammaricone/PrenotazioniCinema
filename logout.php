<?php 

session_start(); 
session_destroy();

setcookie("email", $email, time() - (2000), "/");

header("Location:pagina.php");

?>