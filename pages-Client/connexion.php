<?php
require_once("../init/init-test.php");
require_once("../init/haut-page.php");
?>

<?php 

if($_POST)
{
    // $contenu .=  "pseudo : " . $_POST['pseudo'] . "<br>mot_de_passe : " .  $_POST['mot_de_passe'] . "";
    $resultat = $bdd->query("SELECT * FROM clients WHERE mail='$_POST[mail]'");
    if($resultat->rowCount() != 0)
    {
        // $contenu .=  '<div style="background:green">pseudo connu!</div>';
        $client = $resultat->fetch();
        if($client['mot_de_passe'] == $_POST['mot_de_passe'])
        {
            //$contenu .= '<div class="validation">mot_de_passe connu!</div>';
            foreach($client as $indice => $element)
            {
                if($indice != 'mot_de_passe')
                {
                    $_SESSION['clients'][$indice] = $element;
                }
			}
			
			if (internauteEstConnecteEtEstAdmin()) 
			{
				header('location: ../pages-Admin/index-admin.php');      
			}
			else if(internauteEstConnecte())
			{
				header("location:profil_user.php?action=profilClient&id_client=".$client['id_client']."");
			}
        }
        else
        {
           echo'<div class="validation" style="background-color:white; width:500px; padding-top:30px; padding:10px; border-radius:30px; text-align:center; justifiy-content:center; margin-left:auto; margin-right:auto;">
                <h2>Erreur de mot de passe</h2>
                </div>';
        }       
    }
    else
    {
        echo'<div class="validation" style="background-color:white; width:500px; padding-top:30px; padding:10px; border-radius:30px; text-align:center; justifiy-content:center; margin-left:auto; margin-right:auto;">
                    <h2>Erreur de mail</h2>
            </div>';
    }

    $resultat ->closeCursor();

}


?>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/connexion.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/business-casual.min.css" rel="stylesheet">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->

<!-- main -->
<div class="main-w3layouts wrapper">
		<h1>Formulaire de connexion</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text email" type="email" name="mail" placeholder="Email" required="" for="mail" id="mail">
					<input class="text" type="password" name="mot_de_passe" placeholder="Mot de passe" required="" for="mot_de_passe" id="mot_de_passe">
					<div class="wthree-text">
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SE CONNECTER">
				</form>
				<p>Vous n'avez pas de compte? <a href="./inscription.php">Inscrivez-vous maintenant!</a></p>
			</div>
		</div>


	</div>
    <!-- //main -->


<?php 
require_once("../init/bas-page.php");
?>