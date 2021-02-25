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
      executeRequete("REPLACE INTO clients (id_client, civilite, nom, prenom, adresse, codePostal, ville, pays_id, mail, mot_de_passe) values ('$_POST[id_client]', '$_POST[civilite]', '$_POST[nom]', '$_POST[prenom]', '$_POST[adresse]', '$_POST[codePostal]', '$_POST[ville]', '$_POST[pays_id]', '$_POST[mail]', '$_POST[mot_de_passe]')");

      echo '<div class="validation" style="background-color:white; padding-top:20px; padding:10px; ">
      <h2>Le client a été modifier</h2>';
      $_GET['action'] = 'affichageClients';
      echo '<a href="Recap-client.php?action=affichageClients" class="btn btn-primary">Retour à la gestion des clients</a></div>';
      
  }
?>

<?php
if(isset($_GET['action']) && ($_GET['action'] == 'ajoutClients' || $_GET['action'] == 'modificationClients'))
{
    if(isset($_GET['id_client']))
    {
        $resultat = executeRequete("SELECT * FROM clients INNER JOIN pays ON clients.pays_id = pays.id WHERE id_client=$_GET[id_client] ");
        $client_actuel = $resultat->fetch();
    }


 echo '<form action="" method="post" enctype="multipart/form-data" style="padding:10px; background-color:white; margin-top:0px;">

 <h2>Modification du client</h2>

 <input type="hidden" id="id_client" name="id_client" value="'; if(isset($client_actuel['id_client'])) echo $client_actuel['id_client']; echo '">

        <br>
        <div style="display:flex; flex-direction:row;">
            <div class="col" style="margin-right:5px;">
                <label for="inputState">Nom du client</label>
                <input type="text" class="form-control" id="nom" name="nom" value="'; if(isset($client_actuel['nom'])) echo $client_actuel['nom']; echo '">
            </div>

            <div class="col">
                <label for="inputState">Prénom du client</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="'; if(isset($client_actuel['prenom'])) echo $client_actuel['prenom']; echo '">
            </div>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Civilité</label>
            <select id="inputState" name="civilite" class="form-control">
              <option selected>...</option>
              <option value="Monsieur"'; if(isset($client_actuel) && $client_actuel['civilite'] == 'Monsieur') echo ' selected '; echo '>Monsieur</option>
              <option value="Madame"'; if(isset($client_actuel) && $client_actuel['civilite'] == 'Madame') echo ' selected '; echo '>Madame</option>
              <option value="Mademoiselle"'; if(isset($client_actuel) && $client_actuel['civilite'] == 'Mademoiselle') echo ' selected '; echo '>Mademoiselle</option>
            </select>
          </div>
          <br>
        <div class="form-group col-md-4">
            <label for="inputState">Adresse du client</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="'; if(isset($client_actuel['adresse'])) echo $client_actuel['adresse']; echo '">
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Code postal</label>
            <input type="text" class="form-control" id="codePostal" name="codePostal" value="'; if(isset($client_actuel['codePostal'])) echo $client_actuel['codePostal']; echo '">
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" value="'; if(isset($client_actuel['ville'])) echo $client_actuel['ville']; echo '">
        </div>
        <br>
        <div class="form-group">
            <label for="inputState">Pays</label>
            <select id="inputState" name="pays_id" class="form-control">
                <option selected>...</option>
                <option value="1"'; if(isset($client_actuel) && $client_actuel['pays_id'] == '1') echo ' selected '; echo '>France</option>
                <option value="2"'; if(isset($client_actuel) && $client_actuel['pays_id'] == '2') echo ' selected '; echo '>Grande-Bretagne</option>
                <option value="3"'; if(isset($client_actuel) && $client_actuel['pays_id'] == '3') echo ' selected '; echo '>Belgique</option>
                <option value="4"'; if(isset($client_actuel) && $client_actuel['pays_id'] == '4') echo ' selected '; echo '>Suisse</option>
              </select>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Mail</label>
            <input type="text" class="form-control" id="mail" name="mail" value="'; if(isset($client_actuel['mail'])) echo $client_actuel['mail']; echo '">
        </div>
        <br>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Mot de passe</label>
            <input type="text" class="form-control" id="mot_de_passe" name="mot_de_passe" value="'; if(isset($client_actuel['mot_de_passe'])) echo $client_actuel['mot_de_passe']; echo '">
        </div>
        <br>
      
        <input type="submit" class="btn btn-primary value="'; echo ucfirst($_GET['action']) . '">
        
    </form>';
}
?>

<?php 
require_once("../init/bas-page.php");
?>