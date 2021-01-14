<?php
require_once("../init/init.php");
require_once("../init/haut-page.php");
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
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="Mot de passe" placeholder="Mot de passe" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>J'accepte les termes et conditions</span>
						</label>
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