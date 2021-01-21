<?php
require_once("../init/init.php");
require_once("../init/haut-page-admin.php");
?>

<?php 

  if(!empty($_POST))
  {   // debug($_POST);
      $photo_bdd = ""; 
      if(isset($_GET['action']) && $_GET['action'] == 'modificationChambres')
      {
          $photo_bdd = $_POST['photo_actuelle'];
      }
      if(!empty($_FILES['photo']['name']))
      {   // debug($_FILES);
          $nom_photo = $_POST['Nom_chambre'] . '_' .$_FILES['photo']['name'];
          $photo_bdd = RACINE_SITE . "photo/$nom_photo";
          $photo_dossier = $_SERVER['DOCUMENT_ROOT'] . RACINE_SITE . "/photo/$nom_photo"; 
          copy($_FILES['photo']['tmp_name'],$photo_dossier);
      }
      foreach($_POST as $indice => $valeur)
      {
          $_POST[$indice] = htmlEntities(addSlashes($valeur));
      }
      executeRequete("REPLACE INTO chambres (id_chambre, Nom_chambre, capacite, exposition, douche, etage, tarif_id, photo) values ('$_POST[id_chambre]', '$_POST[Nom_chambre]', '$_POST[capacite]', '$_POST[exposition]', '$_POST[douche]', '$_POST[etage]', '$_POST[tarif_id]', '$photo_bdd')");
      $contenu .= '<div class="validation">La chambre a été ajouté</div>';
      $_GET['action'] = 'affichage';
  }
?>

<?php
if(isset($_GET['action']) && ($_GET['action'] == 'ajoutChambres' || $_GET['action'] == 'modificationChambres'))
{
    if(isset($_GET['id_chambre']))
    {
        $resultat = executeRequete("SELECT * FROM chambres WHERE id_chambre=$_GET[id_chambre]");
        $chambre_actuel = $resultat->fetch_assoc();
    }


 echo '<form action="" style="background-color:white; padding-bottom:10px; padding-left:10px; padding-right:10px;">
    <input type="hidden" id="id_chambre" name="id_chambre" value="'; if(isset($chambre_actuel['id_chambre'])) $chambre_actuel['id_chambre']">
        <br>
        <div style="display:flex; flex-direction:row;">
            <div class="col" style="margin-right:5px;">
            <label for="inputState">Nom de la chambre</label>
              <input type="text" class="form-control" id="Nom_chambre" name="Nom_chambre" value="'; if(isset($chambre_actuel['Nom_chambre'])) echo $chambre_actuel['Nom_chambre']; echo '">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Prix">
            </div>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Capacité</label>
            <select id="inputState" class="form-control">
              <option selected>...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <br>
        <div class="form-group col-md-4">
        <label for="inputState">Etage</label>
        <select id="inputState" class="form-control">
            <option selected>...</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Exposition</label>
            <select id="inputState" class="form-control">
                <option selected>...</option>
                <option>Port</option>
                <option>Rempart</option>
            </select>
            </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlFile1">Photos</label><br>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <br>
        
        <button type="submit" class="btn btn-primary">Enregistré</button>
    </form>';
    ?>

<?php 
require_once("../init/bas-page.php");
?>