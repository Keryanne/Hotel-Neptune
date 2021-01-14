<?php
require_once("../init/init.php");
require_once("../init/haut-page.php");
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/business-casual.min.css" rel="stylesheet">

<div style="display:flex; justify-content:center; margin-top:20px;">
    <div class="card mb-3" style="max-width: auto; margin-right:20px; margin-left:20px">
    <div class="row no-gutters">
        <div class="col-md-4">
        <img src="https://www.usine-digitale.fr/mediatheque/3/9/8/000493893_homePageUne/hotel-c-o-q-paris.jpg" alt="Chambre" style="width: 100%; height: 100%;">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Chambre 1</h5>
            <p class="card-text"><small class="text-muted">Prix</small></p>
            <p class="card-text">CapacitéCapacitéCapacitéCapacitéCapacitéCapacitéCapacitéCapacitéCapacitéCapacitéCapacitéCapacitéCapacitéCapacitéCapacité</p>
            <p class="card-text">DoucheDoucheDoucheDoucheDoucheDoucheDoucheDoucheDoucheDoucheDoucheDouche</p>
            <p class="card-text">ExpositionExpositionExpositionExpositionExpositionExpositionExpositionExpositionExpositionExposition</p>
            <p class="card-text">EtageEtageEtageEtageEtageEtageEtageEtageEtageEtageEtageEtageEtageEtageEtage</p>
        </div>
        <div style="margin-bottom:5px;">
            <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false">
                Retour aux chambres
            </button>
            <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false">
                Réservez
            </button>
        </div>
        </div>
    </div>
    </div>
</div>


<?php 
require_once("../init/bas-page.php");
?>