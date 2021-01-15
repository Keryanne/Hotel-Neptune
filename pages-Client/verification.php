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