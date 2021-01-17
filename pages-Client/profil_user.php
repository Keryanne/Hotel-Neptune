<?php
require_once("../init/init.php");
require_once("../init/haut-page.php");
if(!internauteEstConnecte()) header("location:connexion.php");
?>

<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>pages-Client/css/boostrap.min.css ">
<link href="css/business-casual.min.css" rel="stylesheet">

<!--
//bandeau
info perso
-->

<div class="" style="background-color: white; padding: 1%; display: flex; flex-direction: row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profil</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Contacts</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Paramètres</a>
    </div>
  </div>

  <div class="col-9" style="margin-left: 15px;">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><p>Informations utilisateur</p><p>Informations utilisateur</p><p>Informations utilisateur</p><p>Informations utilisateur</p><p>Informations utilisateur</p><p>Informations utilisateur</p></div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><p>Contacts Admins</p><p>Contacts Admins</p><p>Contacts Admins</p><p>Contacts Admins</p></div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><p>Ici ce sont les paramètres</p><p>Ici ce sont les paramètres</p><p>Ici ce sont les paramètres</p><p>Ici ce sont les paramètres</p><p>Ici ce sont les paramètres</p><p>Ici ce sont les paramètres</p><p>Ici ce sont les paramètres</p><p>Ici ce sont les paramètres</p></div>
    </div>
  </div>
</div>

<!--
//Historique
Chambres déjà reservées
-->

<div style="background-color: #7C90DB; float: left; padding:8%; margin: 5%; border-radius: 100%;">
    <h2>
        Historique d'achat
    </h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Durée</th>
                <th scope="col">Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>//</td>
                <td>//</td>
                <td>//</td>
            </tr>
        </tbody>
    </table>
</div>

<!--
//Chambres reservées
arrivée
durée
-->

<div style="background-color: #7C90DB; float: right; padding:8%; margin: 5%; border-radius: 100%;">
    <h2>
        Chambre en réservation
    </h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Durée</th>
                <th scope="col">Prix</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>//</td>
                <td>//</td>
                <td>//</td>
            </tr>
        </tbody>
    </table>
</div>

<!--
//laisser un avis
boite pop-up
-->

<div style="background-color: white; align-item: center; display: flex; flex-direction: column; padding: 5%; margin-top:40%;">
    <h2 style="text-align: center;">
    Nos services vous ont plu ? <br>  Faites-le nous savoir !
    </h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Nous évaluer
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Réservation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: transparent; border: 0;">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h3>Votre avis nous intéresse :</h3>

                    <p>
                        <u>Qualité de ce service sur 10 :</u>
                        <input type="number" step="1" value="0" min="0" max="10" style="border-radius: 10%; margin-left:10px;">
                    </p>                       
                    <p>
                        <u>Qualité de ce service sur 10 :</u>
                        <input type="number" step="1" value="0" min="0" max="10" style="border-radius: 10%; margin-left:10px;">
                    </p>                        
                    <p>
                        <u>Qualité de ce service sur 10 :</u>
                        <input type="number" step="1" value="0" min="0" max="10" style="border-radius: 10%; margin-left:10px;">
                    </p>                
                    <p>
                        <u>Qualité de ce service sur 10 :</u>
                        <input type="number" step="1" value="0" min="0" max="10" style="border-radius: 10%; margin-left:10px;">
                    </p>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Soumettre</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php 
require_once("../init/bas-page.php");
?>
