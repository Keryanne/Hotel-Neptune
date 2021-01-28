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
      executeRequete("REPLACE INTO chambres (id_chambre, Nom_chambre, capacite, douche, exposition, etage, tarif_id, photo) values ('$_POST[id_chambre]', '$_POST[Nom_chambre]', '$_POST[capacite]', '$_POST[douche]', '$_POST[exposition]', '$_POST[etage]', '$_POST[tarif_id]', '$photo_bdd')");

      echo '<div class="validation" style="background-color:white; padding-top:20px; padding:10px; ">
      <h2>La chambre a été modifier</h2>';
      $_GET['action'] = 'affichageChambres';
      echo '<a href="Recap-chambre.php?action=affichageChambres" class="btn btn-primary">Retour à la gestion des chambres</a></div>';
      
  }
?>
<h2></h2>
<?php
if(isset($_GET['action']) && ($_GET['action'] == 'ajoutChambres' || $_GET['action'] == 'modificationChambres'))
{
    if(isset($_GET['id_chambre']))
    {
        $resultat = executeRequete("SELECT * FROM chambres INNER JOIN tarifs ON chambres.tarif_id = tarifs.tarif_id WHERE id_chambre=$_GET[id_chambre] ");
        $chambre_actuel = $resultat->fetch_assoc();
    }


 echo '<form action="" method="post" enctype="multipart/form-data" style="padding:10px; background-color:white; margin-top:0px;">

 <h2>Modification de la chambre</h2>

 <input type="hidden" id="id_chambre" name="id_chambre" value="'; if(isset($chambre_actuel['id_chambre'])) echo $chambre_actuel['id_chambre']; echo '">

        <br>
        <div style="display:flex; flex-direction:row;">
            <div class="col" style="margin-right:5px;">
            <label for="inputState">Nom de la chambre</label>
              <input type="text" class="form-control" id="Nom_chambre" name="Nom_chambre" value="'; if(isset($chambre_actuel['Nom_chambre'])) echo $chambre_actuel['Nom_chambre']; echo '">
            </div>

            <div class="col">
                <label for="inputState">Prix</label>
                <select id="inputState" name="tarif_id" class="form-control">
                <option selected>...</option>
                <option value="1"'; if(isset($chambre_actuel) && $chambre_actuel['tarif_id'] == '1') echo ' selected '; echo '>38€</option>
                <option value="2"'; if(isset($chambre_actuel) && $chambre_actuel['tarif_id'] == '2') echo ' selected '; echo '>49€</option>
                <option value="3"'; if(isset($chambre_actuel) && $chambre_actuel['tarif_id'] == '3') echo ' selected '; echo '>53€</option>
                <option value="4"'; if(isset($chambre_actuel) && $chambre_actuel['tarif_id'] == '4') echo ' selected '; echo '>58€</option>
                <option value="5"'; if(isset($chambre_actuel) && $chambre_actuel['tarif_id'] == '5') echo ' selected '; echo '>68€</option>
              </select>
            </div>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Capacité</label>
            <select id="inputState" name="capacite" class="form-control">
              <option selected>...</option>
              <option value="2"'; if(isset($chambre_actuel) && $chambre_actuel['capacite'] == '2') echo ' selected '; echo '>2</option>
              <option value="3"'; if(isset($chambre_actuel) && $chambre_actuel['capacite'] == '3') echo ' selected '; echo '>3</option>
              <option value="4"'; if(isset($chambre_actuel) && $chambre_actuel['capacite'] == '4') echo ' selected '; echo '>4</option>
            </select>
          </div>
          <br>
          <div class="form-group col-md-4">
            <label for="inputState">Douche ou Baignoire</label>
            <select id="inputState" name="douche" class="form-control">
                <option selected>...</option>';
               
                   echo '<option value="1"'; if(isset($chambre_actuel) && $chambre_actuel['douche'] == '1') echo ' selected '; echo '>Douche</option>';
                    echo '<option value="0"'; if(isset($chambre_actuel) && $chambre_actuel['douche'] == '0') echo ' selected '; echo '>Baignoire</option>';
                
            echo '</select>
            </div>
        <br>
        <div class="form-group col-md-4">
        <label for="inputState">Etage</label>
        <select id="inputState" name="etage" class="form-control">
            <option selected>...</option>
            <option value="1"'; if(isset($chambre_actuel) && $chambre_actuel['etage'] == '1') echo ' selected '; echo '>1</option>
              <option value="2"'; if(isset($chambre_actuel) && $chambre_actuel['etage'] == '2') echo ' selected '; echo '>2</option>
              <option value="3"'; if(isset($chambre_actuel) && $chambre_actuel['etage'] == '3') echo ' selected '; echo '>3</option>
        </select>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Exposition</label>
            <select id="inputState" name="exposition" class="form-control">
                <option selected>...</option>
                <option value="port"'; if(isset($chambre_actuel) && $chambre_actuel['exposition'] == 'port') echo ' selected '; echo '>Port</option>
              <option value="rempart"'; if(isset($chambre_actuel) && $chambre_actuel['exposition'] == 'rempart') echo ' selected '; echo '>Rempart</option>
            </select>
            </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlFile1">Photos</label><br>
            <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">';
            if(isset($chambre_actuel))
            {
                echo '<i>Vous pouvez uplaoder une nouvelle photo si vous souhaitez la changer</i><br>';
                echo '<img src="' . $chambre_actuel['photo'] . '"  ="90" height="90"><br>';
                echo '<input type="hidden" name="photo_actuelle" value="' . $chambre_actuel['photo'] . '"><br>';
            }
        echo '</div>
      
        <input type="submit" class="btn btn-primary value="'; echo ucfirst($_GET['action']) . '">
        
    </form>';
}
?>

<?php 
require_once("../init/bas-page.php");
//<input type="text" class="form-control" id="prix" name="prix" placeholder=" Prix de la chambre" value="'; if(isset($chambre_actuel['prix'])) echo $chambre_actuel['prix']; echo '" >
?>