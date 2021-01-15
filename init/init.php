<?php
$db_username = 'root';
$db_password = '';
$db_name     = 'neptune';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');

session_start();
 
define("RACINE_SITE","/Projet-PHP/");
 

$contenu = '';

require_once("fonction.php");

?>
