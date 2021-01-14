<?php

$mysqli = new mysqli("localhost", "root", "", "neptune");
if ($mysqli->connect_error) die('La connexion à la base de donnée à échouer : ' . $mysqli->connect_error);

session_start();
 
define("RACINE_SITE","/Projet-PHP/");
 

$contenu = '';


?>
