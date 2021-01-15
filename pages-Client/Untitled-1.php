<?php
session_start();
if(isset($_POST['mail']) && isset($_POST['mot_de_passe']))
{
     
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $mail = mysqli_real_escape_string($db,htmlspecialchars($_POST['mail'])); 
    $mot_de_passe = mysqli_real_escape_string($db,htmlspecialchars($_POST['mot_de_passe']));
    
    if($mail !== "" && $mot_de_passe !== "")
    {
        $requete = "SELECT count(*) FROM clients where 
              mail = '".$mail."' and mot_de_passe = '".$mot_de_passe."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['mail'] = $mail;
           header('Location: /Projet-PHP/pages-Admin/index-admin.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>

$db_username = 'root';
$db_password = '';
$db_name     = 'neptune';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');

       <?php
$mysqli = new mysqli("localhost", "root", "", "neptune");
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);

session_start();
 
define("RACINE_SITE","/Projet-PHP/");


require_once("fonction.php");

?>
function executeRequete($req)
{
    global $mysqli;
    $resultat = $mysqli->query($req);
    if(!$resultat) // 
    {
        die("Erreur sur la requete sql.<br>Message : " . $mysqli->error . "<br>Code: " . $req);
    }
    return $resultat; // 
}
 
function debug($var, $mode = 1)
{
    echo '<div style="background: orange; padding: 5px; float: right; clear: both; ">';
    $trace = debug_backtrace();
    $trace = array_shift($trace);
    echo 'Debug demandé dans le fichier : $trace[file] à la ligne $trace[line].';
    if($mode === 1)
    {
        echo '<pre>'; print_r($var); echo '</pre>';
    }
    else
    {
        echo '<pre>'; var_dump($var); echo '</pre>';
    }
    echo '</div>';
}