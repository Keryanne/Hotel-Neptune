<?php
require_once("../init/init-test.php");
require_once("../init/haut-page.php");
?>

<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>pages-Client/css/boostrap.min.css ">
<link href="css/business-casual.min.css" rel="stylesheet">


<?php 

//SUPRESSION 

if(isset($_GET['action']) && $_GET['action'] == "supressionProfil")
{   
    $resultat = executeRequete("SELECT * FROM clients INNER JOIN pays ON clients.pays_id = pays.id WHERE id_client='$_GET[id_client]'");
    $client_a_supprimer = $resultat->fetch();

   // echo '<div class="validation" style="background-color:white;">Votre compte a bien été suprimer</div>';
    executeRequete("DELETE FROM clients WHERE id_client='$_GET[id_client]'");
    header('location: ../index.php');
}

/*
//bandeau
info perso
*/

if(isset($_GET['action']) && $_GET['action'] == 'profilClient')
{
    echo '<div class="" style="background-color: white; padding: 1%; display: flex; flex-direction: row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profil</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Contacts</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Paramètres</a>
    </div>
  </div>';

    if(isset($_GET['id_client']))
    {
        $donnees = executeRequete("SELECT DISTINCT * FROM clients INNER JOIN pays ON clients.pays_id = pays.id WHERE id_client = '$_GET[id_client]'");  
        if($donnees->rowCount() != 0) 
        { 
            $client = $donnees->fetch();
     
        echo'
        <div class="col-9" style="margin-left: 15px;">
        <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <p>Civilité : '. $client['civilite'] .'</p>
            <p>Nom : '. $client['nom'] .'</p>
            <p>Prénom : '. $client['prenom'] .'</p>
            <p>Adresse email : '. $client['mail'] .'</p>
            <p>Mot de passe : '. $client['mot_de_passe'] .'</p>
            <p>Adresse : '. $client['adresse'] .'</p>
            <p>Code Postale : '. $client['codePostal'] .'</p>
            <p>Ville : '. $client['ville'] .'</p>
            <p>Pays : '. $client['nom_pays'] .'</p>
        </div>
        
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        <p>Accueil : 04 20 69 78 10</p>
        <p>Responsable : 04 60 48 52 69</p>
        <p>Spa : 04 26 58 79 20</p>
        </div>

        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">';
        
        echo '<td style="width:15%;"><a href="profil_user_modif.php?action=modificationProfil&id_client='. $client['id_client'] .'" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg></a></td>
            ';
            echo '<td style="width:15%;"><a href="?action=supressionProfil&id_client='. $client['id_client'] .'" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg></a></td>
      </tr>';
        }
    }
}

?>
            
            <a class="nav-link text-uppercase text-expanded" href="<?php echo RACINE_SITE; ?>init/deconnexion.php" style="display:flex; justify-content:end; color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
            </svg></a>
        </div>
      
    </div>
  </div>
</div>


<!--
//Historique
Chambres déjà reservées
-->
<?php 
if(isset($_GET['id_client']))
{
    $planning = executeRequete("SELECT * FROM chambres, planning, tarifs, clients WHERE id_client = '$_GET[id_client]' AND chambres.tarif_id = tarifs.tarif_id AND chambres.id_chambre = planning.id AND clients.id_client = planning.client_id");  
    if($planning->rowCount()) 
    { 
    echo '<div style="background-color: #7C90DB; float: left; padding:8%; margin: 5%; border-radius: 100%;">
    <h2>
        Historique des chambres
    </h2>
    <table class="table table-bordered">
                <th scope="col">Date</th>
                <th scope="col">Prix</th>
            <tr> ';
            while($row = $planning->fetch(PDO::FETCH_ASSOC))
            {
                echo '<td>'. $row['jour'] .'</td>';
                echo'<td>'. $row['prix'] .'</td>';
                echo '</tr>';
            }
        }
    }
            
        echo '
    </table>
</div>';
        
?>

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
