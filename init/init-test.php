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


define("RACINE_SITE","/Hotel-Neptune/");


require_once("fonction.php");
?>