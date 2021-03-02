<?php
require_once("../init/init-test.php");
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
    executeRequete("INSERT INTO chambres (Nom_chambre, capacite, exposition, douche, etage, tarif_id, photo) values ('$_POST[Nom_chambre]', '$_POST[capacite]', '$_POST[exposition]', '$_POST[douche]', '$_POST[etage]', '$_POST[tarif_id]','$photo_bdd')");
    
    echo '<div class="validation" style="background-color:white; padding-top:20px; padding:10px;">
    <h2>La chambre a été ajouté</h2>';
    echo '<a href="Recap-chambre.php?action=affichageChambres" class="btn btn-primary">Retour à la gestion des chambres</a></div>';
}
?>

<?php

 echo '<form method ="post" action="" enctype="multipart/form-data" style="background-color:white; padding:10px;">
        <br>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nom de la chambre" name="Nom_chambre">
            </div>
            <div class="col">
              <select id="inputState" name="tarif_id" class="form-control">
              <option selected>Prix</option>
              <option value="1">38€</option>
              <option value="2">49€</option>
              <option value="3">53€</option>
              <option value="4">58€</option>
              <option value="5">68€</option>
            </select>
            </div>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Capacité</label>
              <select id="inputState" name="capacite" class="form-control">
              <option selected>...</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <br>
          <div class="form-group col-md-4">
            <label for="inputState">Douche ou Baignoire</label>
            <select id="inputState" name="douche" class="form-control">
                <option selected>...</option>
                <option value="1">Douche</option>
                <option value="0">Baignoire</option>  
           </select>
            </div>
            <br>
        <div class="form-group col-md-4">
        <label for="inputState">Etage</label>
        <select id="inputState" name="etage" class="form-control">
            <option selected>...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Exposition</label>
            <select id="inputState" name="exposition" class="form-control">
                <option selected>...</option>
                  <option>Port</option>
                  <option>Rempart</option>
            </select>
            </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlFile1">Photos</label><br>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Ajouter">
    </form>';

require_once("../init/bas-page.php");
?>