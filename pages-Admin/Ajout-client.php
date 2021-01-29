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
    executeRequete("INSERT INTO clients (civilite, nom, prenom, adresse, codePostal, ville, pays_id, mail) values ('$_POST[civilite]', '$_POST[nom]', '$_POST[prenom]', '$_POST[adresse]', '$_POST[codePostal]', '$_POST[ville]','$_POST[pays_id]', '$_POST[mail]')");
    
    echo '<div class="validation" style="background-color:white; padding-top:20px; padding:10px;">
    <h2>Le client a été ajouté</h2>';
    echo '<a href="Recap-client.php?action=affichageClients" class="btn btn-primary">Retour à la gestion des clients</a></div>';
}
?>

<?php

 echo '<form method ="post" action="" enctype="multipart/form-data" style="background-color:white; padding:10px;">
        <br>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nom du client" name="nom">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Prénom du client" name="prenom">
            </div>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Civilité</label>
            <select id="inputState" name="civilite" class="form-control">
              <option selected>...</option>
              <option value="Monsieur">Monsieur</option>
              <option value="Mademoiselle">Mademoiselle</option>
              <option value="Madame">Madame</option>
            </select>
        </div>
        <br> 
       
          <br>
        <div class="form-group col-md-4">
            <label for="inputState">Adresse</label>
            <input type="text" class="form-control" name="adresse">
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Code Postal</label>
            <input type="text" class="form-control" name="codePostal">
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Ville</label>
            <input type="text" class="form-control" name="ville">
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Pays</label>
            <select id="inputState" name="pays_id" class="form-control">
                <option selected>Prix</option>
                <option value="1">France</option>
                <option value="2">Grande-Bretagne</option>
                <option value="3">Belgique</option>
                <option value="4">Suisse</option>
            </select>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Mail</label>
            <input type="text" class="form-control" name="mail">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Ajouter">
    </form>';

require_once("../init/bas-page.php");
?>