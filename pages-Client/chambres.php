<?php
require_once("../init/init.php");
require_once("../init/haut-page.php");
?>

<div style=" display:flex; flex-direction: column; align-items:center;">

<div style=" display:flex; flex-direction: row; margin:20px" >
  <div class="card mb-3" style="max-width: 850px; margin-right:15px">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://www.usine-digitale.fr/mediatheque/3/9/8/000493893_homePageUne/hotel-c-o-q-paris.jpg" alt="Chambre" style="width: 100%; height: 100%;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Chambre 1</h5>
                <p class="card-text"><small class="text-muted">PRIX</small></p>
                <p class="card-text">Description ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription Chambre</p>
                <a href="<?php echo RACINE_SITE; ?>pages-Client/description-chambre.php" class="btn btn-primary">En savoir plus</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3" style="max-width: 850px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://www.usine-digitale.fr/mediatheque/3/9/8/000493893_homePageUne/hotel-c-o-q-paris.jpg" alt="Chambre" style="width: 100%; height: 100%;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Chambre 2</h5>
                <p class="card-text"><small class="text-muted">PRIX</small></p>
                <p class="card-text">Description ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription Chambre</p>
                <a href="<?php echo RACINE_SITE; ?>pages-Client/description-chambre.php" class="btn btn-primary">En savoir plus</a>
              </div>
            </div>
          </div>
        </div>
</div>

<div style=" display:flex; flex-direction: row;">

      <div class="card mb-3" style="max-width: 850px; margin-right:15px">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://www.usine-digitale.fr/mediatheque/3/9/8/000493893_homePageUne/hotel-c-o-q-paris.jpg" alt="Chambre" style="width: 100%; height: 100%;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Chambre 3</h5>
              <p class="card-text"><small class="text-muted">PRIX</small></p>
              <p class="card-text">Description ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription Chambre</p>
              <a href="<?php echo RACINE_SITE; ?>pages-Client/description-chambre.php" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card mb-3" style="max-width: 850px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://www.usine-digitale.fr/mediatheque/3/9/8/000493893_homePageUne/hotel-c-o-q-paris.jpg" alt="Chambre" style="width: 100%; height: 100%;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Chambre 4</h5>
              <p class="card-text"><small class="text-muted">PRIX</small></p>
              <p class="card-text">Description ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription ChambreDescription Chambre</p>
              <a href="<?php echo RACINE_SITE; ?>pages-Client/description-chambre.php" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
</div>
</div>

<?php 
require_once("../init/bas-page.php");
?>