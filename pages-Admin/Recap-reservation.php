<?php
require_once("../init/init-test.php");
require_once("../init/haut-page-admin.php");
?>

<?php

//SUPRESSION 

if(isset($_GET['action']) && $_GET['action'] == "supressionReservation")
{   
    $resultat = executeRequete("SELECT * FROM planning, chambres, clients INNER JOIN tarifs ON chambres.tarif_id = tarifs.tarif_id WHERE id_reservation='$_GET[id_reservation]'");
    $reservation_a_supprimer = $resultat->fetch();

    echo '<div class="validation" style="background-color:white;">Suppression de la réservation : ' . $_GET['id_reservation'] . '</div>';
    executeRequete("DELETE FROM planning WHERE id_reservation='$_GET[id_reservation]'");
    executeRequete("DELETE FROM chambres WHERE id_reservation='$_GET[id_reservation]'");
    $_GET['action'] = 'affichageReservation';
}

?>

<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>pages-Client/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>pages-Client/css/bootstrap.css">

<div style="background-color:white;">
<div style="margin-left:20px; padding-top:20px;">
     

<?php

echo '<div style="display:flex; justify-content:center;">
    <h2>Gestion des réservations</h2>
    </div>

    <h2>Ajouter une réservation
        <a href="Ajout-reservation.php?action=Ajout-reservation" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg></a>
    </h2> ';

    echo '<form method="GET">
    <input type ="search" name="sbar" placeholder="recherche" autocomplete="off">
    <input type ="submit" name="envoyer">
    </form>';

    if(isset($_GET['sbar']) AND !empty($_GET['sbar']))
    {
        $recherche = htmlspecialchars($_GET['sbar']);
        $resultat = executeRequete('SELECT * FROM chambres chambres, clients, planning, tarifs WHERE chambres.id_chambre = planning.id AND clients.id_client = planning.client_id AND WHERE Nom_chambre LIKE "%'.$recherche.'%" ORDER BY id_reservation ASC');

        echo '<table class="table table-hover" style="text-align:center; margin-bottom:0; background-color:white;"> <tr>';

        echo'<th>Nom du client</th>
        <th>Nom de la chambre</th>
        <th>Jour</th>
        <th>Acompte</th>
        <th>Payé</th>
        <th>Prix</th>
        <th scope="col">Modification</th>
        <th scope="col">Suppression</th>
        </tr>
        <tr>';

        if($resultat->rowCount() > 0)
        {
            while($rech = $resultat->fetch())
            {
                echo '<td>' .  $rech['nom']  .'</td>';
                echo '<td>' .  $rech['Nom_chambre']  .'</td>';
                echo '<td>' .  $rech['jour']  .'</td>';
                echo '<td>' .  $rech['acompte']  .'</td>';
                echo '<td>' .  $rech['paye']  .'</td>';
                echo '<td>' .  $rech['prix']  .'</td>';

                echo '<td style="width:15%;"><a href="modif-reservation.php?action=modificationReservation&id_reservation='. $rech['id_reservation'] .'" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg></a></td>
                    <td style="width:15%;"><a href="?action=supressionReservation&id_reservation='. $rech['id_reservation'] .'" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg></a></td>
                    </tr>';

            }
        }
        else
        {
            echo '<p>Aucune réservation trouvée </p>';
        }

        echo '</table>
        </div>';
    }
?>   

<?php 


    if(isset($_GET['action']) && $_GET['action'] == "affichageReservation")
    {
        $dreservation = executeRequete("SELECT DISTINCT * FROM chambres, clients, planning, tarifs WHERE chambres.id_chambre = planning.id AND clients.id_client = planning.client_id"); 


        $dreservation->rowCount();
        echo '<table class="table table-hover" style="text-align:center; margin-bottom:0; background-color:white;"> <tr>';

        echo'<th>Nom du client</th>
        <th>Nom de la chambre</th>
        <th>Jour</th>
        <th>Acompte</th>
        <th>Paye</th>
        <th>Prix</th>
        <th scope="col">Modification</th>
        <th scope="col">Suppression</th>
        </tr>
        <tr>';
            
        while($row = $dreservation->fetch(PDO::FETCH_ASSOC))
        {
            echo '<td>' . htmlspecialchars($row['nom']) . '</td>';
            echo '<td>' . htmlspecialchars($row['Nom_chambre']) . '</td>';
            echo '<td>' . htmlspecialchars($row['jour']) . '</td>';
            echo '<td>' . htmlspecialchars($row['acompte']) . '</td>';
            echo '<td>' . htmlspecialchars($row['paye']) . '</td>';
            echo '<td>' . htmlspecialchars($row['prix']) . '</td>';
        
            echo '<td style="width:15%;"><a href="modif-reservation.php?action=modificationReservation&id_reservation='. $row['id_reservation'] .'" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg></a></td>
                <td style="width:15%;"><a href="?action=supressionReservation&id_reservation='. $row['id_reservation'] .'" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
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