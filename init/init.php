<?php

session_start();
$mysqli = new mysqli("localhost", "root", "", "neptune");
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);


 
define("RACINE_SITE","/Projet-PHP/");


require_once("fonction.php");

?>
