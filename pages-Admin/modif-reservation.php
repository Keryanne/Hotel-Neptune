<?php
require_once("../init/init-test.php");
require_once("../init/haut-page-admin.php");
?>

<?php 

  if(!empty($_POST))
  {   // debug($_POST);
      foreach($_POST as $indice => $valeur)
      {
          $_POST[$indice] = htmlEntities(addSlashes($valeur));
      }
      executeRequete("REPLACE INTO planning (id_chambre, Nom_chambre, capacite, douche, exposition, etage, tarif_id, photo) values ('$_POST[id_chambre]', '$_POST[Nom_chambre]', '$_POST[capacite]', '$_POST[douche]', '$_POST[exposition]', '$_POST[etage]', '$_POST[tarif_id]', '$photo_bdd')");

      echo '<div class="validation" style="background-color:white; padding-top:20px; padding:10px; ">
      <h2>La chambre a été modifier</h2>';
      $_GET['action'] = 'affichageReservation';
      echo '<a href="Recap-reservation.php?action=affichageReservation" class="btn btn-primary">Retour à la gestion des réservation</a></div>';
      
  }
?>

<?php


?>

<?php
if(isset($_GET['action']) && ($_GET['action'] == 'ajoutReservation' || $_GET['action'] == 'modificationReservation'))
{
    if(isset($_GET['id_reservation']))
    {
        $resultat = executeRequete("SELECT * FROM chambres, clients, planning, tarifs WHERE chambres.id_chambre = planning.id AND clients.id_client = planning.client_id AND id_reservation='$_GET[id_reservation]'");
        $reservation_actuel = $resultat->fetch();
    }

 echo '<form action="" method="post" enctype="multipart/form-data" style="padding:10px; background-color:white; margin-top:0px;">

 <h2>Modification de la réservation</h2>



 <input type="hidden" id="id_reservation" name="id_reservation" value="'; if(isset($reservation_actuel['id_reservation'])) echo $reservation_actuel['id_reservation']; echo '">

        <br>
        <div style="display:flex; flex-direction:row;">
            <div class="col" style="margin-right:5px;">
            <label for="inputState">Nom de la chambre</label>
              <input type="text" class="form-control" id="nom" name="nom" value="'; if(isset($reservation_actuel['nom'])) echo $reservation_actuel['nom']; echo '">
            </div>

            <div style="display:flex; flex-direction:row;">
            <div class="col" style="margin-right:5px;">
            <label for="inputState">Nom de la chambre</label>
              <input type="text" class="form-control" id="Nom_chambre" name="Nom_chambre" value="'; if(isset($reservation_actuel['Nom_chambre'])) echo $reservation_actuel['Nom_chambre']; echo '">
            </div>
            <br>

            <div class="col">
                <label for="inputState">Prix</label>
                <select id="inputState" name="tarif_id" class="form-control">
                <option selected>...</option>
                <option value="1"'; if(isset($reservation_actuel) && $reservation_actuel['tarif_id'] == '1') echo ' selected '; echo '>38€</option>
                <option value="2"'; if(isset($reservation_actuel) && $reservation_actuel['tarif_id'] == '2') echo ' selected '; echo '>49€</option>
                <option value="3"'; if(isset($reservation_actuel) && $reservation_actuel['tarif_id'] == '3') echo ' selected '; echo '>53€</option>
                <option value="4"'; if(isset($reservation_actuel) && $reservation_actuel['tarif_id'] == '4') echo ' selected '; echo '>58€</option>
                <option value="5"'; if(isset($reservation_actuel) && $reservation_actuel['tarif_id'] == '5') echo ' selected '; echo '>68€</option>
              </select>
            </div>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Capacité</label>
            <select id="inputState" name="capacite" class="form-control">
              <option selected>...</option>
              <option value="2"'; if(isset($reservation_actuel) && $reservation_actuel['capacite'] == '2') echo ' selected '; echo '>2</option>
              <option value="3"'; if(isset($reservation_actuel) && $reservation_actuel['capacite'] == '3') echo ' selected '; echo '>3</option>
              <option value="4"'; if(isset($reservation_actuel) && $reservation_actuel['capacite'] == '4') echo ' selected '; echo '>4</option>
            </select>
          </div>
          <br>
          <div class="form-group col-md-4">
            <label for="inputState">Douche ou Baignoire</label>
            <select id="inputState" name="douche" class="form-control">
                <option selected>...</option>';
               
                   echo '<option value="1"'; if(isset($reservation_actuel) && $reservation_actuel['douche'] == '1') echo ' selected '; echo '>Douche</option>';
                    echo '<option value="0"'; if(isset($reservation_actuel) && $reservation_actuel['douche'] == '0') echo ' selected '; echo '>Baignoire</option>';
                
            echo '</select>
            </div>
        <br>
        <div class="form-group col-md-4">
        <label for="inputState">Etage</label>
        <select id="inputState" name="etage" class="form-control">
            <option selected>...</option>
            <option value="1"'; if(isset($reservation_actuel) && $reservation_actuel['etage'] == '1') echo ' selected '; echo '>1</option>
              <option value="2"'; if(isset($reservation_actuel) && $reservation_actuel['etage'] == '2') echo ' selected '; echo '>2</option>
              <option value="3"'; if(isset($reservation_actuel) && $reservation_actuel['etage'] == '3') echo ' selected '; echo '>3</option>
        </select>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Exposition</label>
            <select id="inputState" name="exposition" class="form-control">
                <option selected>...</option>
                <option value="port"'; if(isset($reservation_actuel) && $reservation_actuel['exposition'] == 'port') echo ' selected '; echo '>Port</option>
              <option value="rempart"'; if(isset($reservation_actuel) && $reservation_actuel['exposition'] == 'rempart') echo ' selected '; echo '>Rempart</option>
            </select>
            </div>
        <br>
      
        <input type="submit" class="btn btn-primary value="'; echo ucfirst($_GET['action']) . '">
        
    </form>';
}
?>

<?php 
require_once("../init/bas-page.php");
//<input type="text" class="form-control" id="prix" name="prix" placeholder=" Prix de la chambre" value="'; if(isset($reservation_actuel['prix'])) echo $reservation_actuel['prix']; echo '" >
?>