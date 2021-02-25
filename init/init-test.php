<?php
session_start();


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=neptune;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


define("RACINE_SITE","/Projet-PHP/");


require_once("fonction.php");
?>