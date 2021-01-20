<?php
require_once("../init/init.php");
require_once("../init/haut-page-admin.php");
?>

<?php

if(!empty($_POST))
{   // debug($_POST);
  $photo_bdd = ""; 
    if(!empty($_FILES['photo']['name']))
    {   // debug($_FILES);
        $nom_photo = $_POST['reference'] . '_' .$_FILES['photo']['name'];
        $photo_bdd = RACINE_SITE . "photo/$nom_photo";
        $photo_dossier = $_SERVER['DOCUMENT_ROOT'] . RACINE_SITE . "/image/$nom_photo"; 
        copy($_FILES['photo']['tmp_name'],$photo_dossier);
    }
    foreach($_POST as $indice => $valeur)
    {
        $_POST[$indice] = htmlEntities(addSlashes($valeur));
    }
    executeRequete("INSERT INTO chambres (id_chambre, Nom_chambre, capacite, exposition, douche, etage, tarif_id, photo) values ('', '$_POST[Nom_chambre]', '$_POST[capacite]', '$_POST[exposition]', '$_POST[douche]', '$_POST[etage]', '$_POST[tarif_id]','$photo_bdd')");
    
    echo '<div class="validation">Le produit a été ajouté</div>';
}

//$dchambre = executeRequete("SELECT DISTINCT * FROM chambres INNER JOIN tarifs ON chambres.tarif_id = tarifs.tarif_id"); 

?>

<?php

 echo '<form method ="post" action="Recap-chambre.php" style="background-color:white;">
        <br>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nom de la chambre" name="Nom_chambre">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Prix" name="tarif_id">
            </div>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Capacité</label>
            <select id="inputState" name="capacite" class="form-control">
              <option selected>...</option>';
              for($i = 1;$i <= 4;$i++)
              {
                  echo '<option value="'.$i.'">'.$i.'</option>';
              }
            echo '</select>
          </div>
          <br>
        <div class="form-group col-md-4">
        <label for="inputState">Etage</label>
        <select id="inputState" name="etage" class="form-control">
            <option selected>...</option>';
            for($i = 1;$i <= 3;$i++)
            {
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
        echo '</select>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Exposition</label>
            <select id="inputState" name="exposition" class="form-control">
                <option selected>...</option>';
                  echo '<option>Port</option>';
                  echo '<option>Rempart</option>';
            echo '</select>
            </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlFile1">Photos</label><br>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Ajouté</button>
    </form>';

require_once("../init/bas-page.php");
?>