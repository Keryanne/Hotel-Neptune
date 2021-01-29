<?php
require_once("../init/init-test.php");
require_once("../init/haut-page.php");
?>

<?php


$donnees = executeRequete("SELECT DISTINCT * FROM chambres INNER JOIN tarifs ON chambres.tarif_id = tarifs.tarif_id");  
echo '<div style="align-items:center;">';


    while($chambres = $donnees->fetch())
    {
      echo '<div style=" margin:20px; display:inline-block; vertical-align:middle;">
      <div class="card mb-3" style="max-width: 850px; margin-right:15px">
      <div class="row g-0">
        <div class="col-md-4">
        <img src="https://www.usine-digitale.fr/mediatheque/3/9/8/000493893_homePageUne/hotel-c-o-q-paris.jpg" alt="Chambre" style="width: 100%; height: 100%;">
        </div>
        <div class="col-md-8">
          <div class="card-body">
          <h5 class="card-title">' . $chambres['Nom_chambre'] . '</h5>
          <p class="card-text"><small class="text-muted">' . $chambres["prix"] . '€</small></p>
          <p class="card-text">Voici votre ' . $chambres["Nom_chambre"] . '</p>
          <a href="description-chambre.php?id_chambre='. $chambres['id_chambre'] .'" class="btn btn-primary">En savoir plus</a>
          <a href="reservation.php?id_chambre='. $chambres['id_chambre'] .'" class="btn btn-primary">Réservez</a>
          </div>
        </div>
      </div>
    </div> </div> ';
             
    }
    echo' </div> ';
    $donnees ->closeCursor();
?>


<?php 
require_once("../init/bas-page.php");
?>