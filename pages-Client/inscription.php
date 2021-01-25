<?php
require_once("../init/init.php");
require_once("../init/haut-page.php");
?>

<?php
//On teste si le formulaire a été soumis
	if ((isset($_POST['civilite'])) && (isset($_POST['nom']))	&& (isset($_POST['prenom'])) && (isset($_POST['mail'])) && (isset($_POST['mot_de_passe']) ))
	
	//on teste si tous les champs du formulaire sont remplits
	if ((!empty($_POST['civilite'])) && (!empty($_POST['nom']))	&& (!empty($_POST['prenom'])) && (!empty($_POST['mail'])) && (!empty($_POST['mot_de_passe'])))
?>

<?php
if ($_POST)
{
	$clients = executeRequete("SELECT * FROM clients WHERE mail='$_POST[mail]'");
    if($clients->num_rows > 0)
	{
        echo "<div class='erreur'>Mail déjà utilisé. Veuillez vous connecté.</div>";
	}
	
    else
    {
        // $_POST['mdp'] = md5($_POST['mdp']);
        foreach($_POST as $indice => $valeur)
        {
            $_POST[$indice] = htmlEntities(addSlashes($valeur));
		}
		
		executeRequete("INSERT INTO clients (`civilite`, `nom`, `prenom`, `mail`, `mot_de_passe`) VALUES('$_POST[civilite]','$_POST[nom]','$_POST[prenom]','$_POST[mail]','$_POST[mot_de_passe]')");
		
		echo "<div class='validation'>Vous êtes inscrit à notre site web. <a href=\"connexion.php\"><u>Cliquez ici pour vous connecter</u></a></div>";
	}
}
?>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1);} </script>
<!-- Custom Theme files -->
<link href="css/inscription.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/business-casual.min.css" rel="stylesheet">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->

<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Formulaire d'inscription</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post">
					<label class="anim">Civilité</label><br>
						<div class="wthree-text">
							<label class="anim">
								<input name="civilite" type="radio" value="Monsieur" class="checkbox" required="">
								<span>Homme</span><br>
							</label>
							<label class="anim">
								<input name="civilite" type="radio" value="Madame" class="checkbox" required="">
								<span>Madame</span><br>
							</label>
							<label class="anim">
								<input name="civilite" type="radio" value="Mademoiselle" class="checkbox" required="">
								<span>Mademoiselle</span><br>
						</label>
					<input class="text" type="text" name="nom" placeholder="Nom" required="">
                    <input class="text1" type="text" name="prenom" placeholder="Prénom" required="">
					<input class="text email" type="email" name="mail" placeholder="Email" required="">
					<input class="text" type="password" name="mot_de_passe" placeholder="Mot de passe" required="">
					<input class="text w3lpass" type="password" placeholder="Confirmez votre mot de passe" required="">
						<div class="clear"> </div>
					</div>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>J'accepte les termes et conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="inscription" value="S'INSCRIRE">
				</form>
				<p>Vous avez déjà un compte? <a href="./connexion.php">Connectez-vous maintenant!</a></p>
			</div>
		</div>
	</div>
<?php 
require_once("../init/bas-page.php");
?>