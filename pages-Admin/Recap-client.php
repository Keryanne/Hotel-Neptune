<?php
require_once("../init/init-test.php");
require_once("../init/haut-page-admin.php");
?>

<?php

//SUPRESSION 

if(isset($_GET['action']) && $_GET['action'] == "supressionClients")
{   
    $resultat = executeRequete("SELECT * FROM clients INNER JOIN pays ON clients.pays_id = pays.id WHERE id_client=$_GET[id_client]");
    $client_a_supprimer = $resultat->fetch();

    echo '<div class="validation" style="background-color:white;">Suppression du client : ' . $_GET['id_client'] . '</div>';
    executeRequete("DELETE FROM clients WHERE id_client=$_GET[id_client]");
    $_GET['action'] = 'affichageClients';
}

?>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>pages-Client/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>pages-Client/css/bootstrap.css">

<div style="background-color:white;">

<div style="margin-left:20px; padding-top:20px;">
   
<?php 

  echo '<div style="display:flex; justify-content:center;">
  <h2>Gestion des clients</h2>
  </div>

  <h2>Ajouter un client
      <a href="Ajout-client.php?action=Ajout-clients" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg></a>
  </h2> ';



  echo '<form method="GET">
<input type ="search" name="sbar" placeholder="recherche" autocomplete="off">
<input type ="submit" name="envoyer">
</form>';

echo '</br>';

    if(isset($_GET['sbar']) AND !empty($_GET['sbar'])){
        $recherche = htmlspecialchars($_GET['sbar']);
        $resultat = executeRequete('SELECT * FROM clients INNER JOIN pays ON clients.pays_id = pays.id WHERE nom LIKE "%'.$recherche.'%" ORDER BY id_client ASC');


    echo '<table class="table table-hover" style="text-align:center; margin-bottom:0; background-color:white;"> <tr>';

    echo'<th>ID</th>
    <th>Nom de la chambre</th>
    <th>Capacité</th>
    <th>Douche / Baignoire</th>
    <th>Exposition</th>
    <th>Prix</th>
    <th scope="col">Modification</th>
    <th scope="col">Suppression</th>
    </tr>
    <tr>';

    if($resultat->rowCount() > 0){
        while($rech = $resultat->fetch()){
            echo '<td>' .  $rech['id_client']  .'</td>';
            echo '<td>' .  $rech['civilite']  .'</td>';
            echo '<td>' .  $rech['nom']  .'</td>';
            echo '<td>' .  $rech['prenom']  .'</td>';
            echo '<td>' .  $rech['adresse']  .'</td>';
            echo '<td>' .  $rech['codePostal']  .'</td>';
            echo '<td>' .  $rech['ville']  .'</td>';
            echo '<td>' .  $rech['nom_pays']  .'</td>';

            echo '<td style="width:15%;"><a href="modif-chambre.php?action=modificationChambres&id_chambre='. $rech['id_client'] .'" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg></a></td>
                <td style="width:15%;"><a href="?action=supressionChambres&id_chambre='. $rech['id_client'] .'" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg></a></td>
                </tr>';

        }
    }else{
        echo '<p>Aucune chambre trouvée </p>';
    }

    echo '</table>
    </div>';
}
?>   

<?php 

  if(isset($_GET['action']) && $_GET['action'] == "affichageClients")
  {
    $dclient = executeRequete("SELECT DISTINCT id_client, civilite, nom, prenom, adresse, codePostal, nom_pays, ville FROM clients INNER JOIN pays ON clients.pays_id = pays.id"); 
    $dclient->rowCount();
    echo '<table class="table table-hover" style="text-align:center; margin-bottom:0; background-color:white;"> <tr>';

    echo'<th>ID</th>
    <th>Civilité</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Adresse</th>
    <th>Code Postal</th>
    <th>Ville</th>
    <th>Pays</th>
    <th scope="col">Modification</th>
    <th scope="col">Suppression</th>
    </tr>
    <tr>';
         
   
    while ($row = $dclient->fetch(PDO::FETCH_ASSOC))
    {
      echo '<td>' . htmlspecialchars($row['id_client']) . '</td>';
      echo '<td>' . htmlspecialchars($row['civilite']) . '</td>';
      echo '<td>' . htmlspecialchars($row['nom']) . '</td>';
      echo '<td>' . htmlspecialchars($row['prenom']) . '</td>';
      echo '<td>' . htmlspecialchars($row['adresse']) . '</td>';
      echo '<td>' . htmlspecialchars($row['codePostal']) . '</td>';
      echo '<td>' . htmlspecialchars($row['ville']) . '</td>';
      echo '<td>' . htmlspecialchars($row['nom_pays']) . '</td>';

      echo '<td style="width:15%;"><a href="modif-client.php?action=modificationClients&id_client='. $row['id_client'] .'" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
      </svg></a></td>
      <td style="width:15%;"><a href="?action=supressionClients&id_client='. $row['id_client'] .'" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg></a></td>
      </tr>';
           
    }
    echo '</table>
        </div>';
  }

  require_once("../init/bas-page.php");
?>