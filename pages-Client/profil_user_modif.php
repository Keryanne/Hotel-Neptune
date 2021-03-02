<?php
require_once("../init/init-test.php");
require_once("../init/haut-page.php");
?>

<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>pages-Client/css/boostrap.min.css ">
<link href="css/business-casual.min.css" rel="stylesheet">

<?php 

  if(!empty($_POST))
  {   // debug($_POST);
      foreach($_POST as $indice => $valeur)
      {
        $_POST[$indice] = htmlEntities(addSlashes($valeur));
      }
      $bdd->query("REPLACE INTO clients (id_client, civilite, nom, prenom, adresse, codePostal, ville, pays_id, mail, mot_de_passe) values ('$_GET[id_client]', '$_POST[civilite]', '$_POST[nom]', '$_POST[prenom]', '$_POST[adresse]', '$_POST[codePostal]', '$_POST[ville]', '$_POST[pays_id]', '$_POST[mail]', '$_POST[mot_de_passe]')");

      echo '<div class="validation" style="background-color:white; padding-top:20px; padding:10px; ">
      <h2>Votre profil a été modifier</h2>';
      $_GET['action'] = 'profilClient';
      if(isset($_GET['id_client']))
      {
        $resultat = $bdd->query("SELECT * FROM clients WHERE id_client = '$_GET[id_client]'");
        if($resultat->rowCount() != 0)
        {
          $client = $resultat->fetch();
          echo '<a href="profil_user.php?action=profilClient&id_client='. $client['id_client'] .'" class="btn btn-primary">Retour au profil</a></div>';
        }
      }
    }
?>

<?php


  
if(isset($_GET['action']) && $_GET['action'] == 'modificationProfil')
    {
            if(isset($_GET['id_client']))
            {
                $donneeProfil = executeRequete("SELECT * FROM clients INNER JOIN pays ON clients.pays_id = pays.id WHERE id_client='$_GET[id_client]'");
                $profil_actuel = $donneeProfil->fetch();
            }
            echo '<div class="" style="background-color: white; padding: 1%; display: flex; flex-direction: row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profil</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Contacts</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Paramètres</a>
    </div>
  </div>';
            echo '<form action="" method="post" enctype="multipart/form-data" style="padding:10px; background-color:white; margin-top:0px;">

            <input type="hidden" id="id_client" name="id_client" value="'; if(isset($profil_actuel['id_client'])) echo $profil_actuel['id_client']; echo '">

            <br>
            <div style="display:flex; flex-direction:row;">
                <div class="col" style="margin-right:5px;">
                    <label for="inputState">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="'; if(isset($profil_actuel['nom'])) echo $profil_actuel['nom']; echo '">
                </div>
    
                <div class="col">
                    <label for="inputState">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="'; if(isset($profil_actuel['prenom'])) echo $profil_actuel['prenom']; echo '">
                </div>
            </div>
            <br>
            <div class="form-group col-md-4">
                <label for="inputState">Civilité</label>
                <select id="inputState" name="civilite" class="form-control">
                  <option selected>...</option>
                  <option value="Monsieur"'; if(isset($profil_actuel) && $profil_actuel['civilite'] == 'Monsieur') echo ' selected '; echo '>Monsieur</option>
                  <option value="Madame"'; if(isset($profil_actuel) && $profil_actuel['civilite'] == 'Madame') echo ' selected '; echo '>Madame</option>
                  <option value="Mademoiselle"'; if(isset($profil_actuel) && $profil_actuel['civilite'] == 'Mademoiselle') echo ' selected '; echo '>Mademoiselle</option>
                </select>
              </div>
              <br>
            <div class="form-group col-md-4">
                <label for="inputState">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="'; if(isset($profil_actuel['adresse'])) echo $profil_actuel['adresse']; echo '">
            </div>
            <br>
            <div class="form-group col-md-4">
                <label for="inputState">Code postal</label>
                <input type="text" class="form-control" id="codePostal" name="codePostal" value="'; if(isset($profil_actuel['codePostal'])) echo $profil_actuel['codePostal']; echo '">
            </div>
            <br>
            <div class="form-group col-md-4">
                <label for="inputState">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" value="'; if(isset($profil_actuel['ville'])) echo $profil_actuel['ville']; echo '">
            </div>
            <br>
            <div class="form-group">
                <label for="inputState">Pays</label>
                <select id="inputState" name="pays_id" class="form-control">
                    <option selected>...</option>
                    <option value="1"'; if(isset($profil_actuel) && $profil_actuel['pays_id'] == '1') echo ' selected '; echo '>France</option>
                    <option value="2"'; if(isset($profil_actuel) && $profil_actuel['pays_id'] == '2') echo ' selected '; echo '>Grande-Bretagne</option>
                    <option value="3"'; if(isset($profil_actuel) && $profil_actuel['pays_id'] == '3') echo ' selected '; echo '>Belgique</option>
                    <option value="4"'; if(isset($profil_actuel) && $profil_actuel['pays_id'] == '4') echo ' selected '; echo '>Suisse</option>
                  </select>
            </div>
            <br>
            <div class="form-group col-md-4">
                <label for="inputState">Mail</label>
                <input type="text" class="form-control" id="mail" name="mail" value="'; if(isset($profil_actuel['mail'])) echo $profil_actuel['mail']; echo '">
            </div>
            <br>
            <br>
            <div class="form-group col-md-4">
                <label for="inputState">Mot de passe</label>
                <input type="text" class="form-control" id="mot_de_passe" name="mot_de_passe" value="'; if(isset($profil_actuel['mot_de_passe'])) echo $profil_actuel['mot_de_passe']; echo '">
            </div>
            <br>
          
            <input type="submit" class="btn btn-primary value="'; echo ucfirst($_GET['action']) . '">
            
        </form>';
    }
    echo '</div>';
    
?>

    
<?php 
require_once("../init/bas-page.php");
?>