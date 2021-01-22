<?php
require_once("../init/init.php");
require_once("../init/haut-page-admin.php");
?>

<?php

//SUPRESSION 

if(isset($_GET['action']) && $_GET['action'] == "supressionChambres")
{   
    $resultat = executeRequete("SELECT * FROM chambres WHERE id_chambre=$_GET[id_chambre]");
    $chambre_a_supprimer = $resultat->fetch_assoc();
    $chemin_photo_a_supprimer = $_SERVER['DOCUMENT_ROOT'] . $chambre_a_supprimer['photo'];

    if(!empty($chambre_a_supprimer['photo']) && file_exists($chemin_photo_a_supprimer)) unlink($chemin_photo_a_supprimer);

    echo '<div class="validation">Suppression de la chambre : ' . $_GET['id_chambre'] . '</div>';
    executeRequete("DELETE FROM chambres WHERE id_chambre=$_GET[id_chambre]");
    $_GET['action'] = 'affichageChambres';
}

//MODIFICATION

?>

<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>pages-Client/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>pages-Client/css/bootstrap.css">

<div style="background-color:white;">
<form action="" >
<div style="margin-left:20px; padding-top:20px;">


  
     
<?php 

echo '<div style="display:flex; justify-content:center;">
<h2>Gestion de chambres</h2>
</div>

<h2>Ajouter une chambre
    <a href="Ajout-chambre.php?action=ajout" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg></a>
</h2> ';

  if(isset($_GET['action']) && $_GET['action'] == "affichageChambres")
  {
    $dchambre = executeRequete("SELECT DISTINCT id_chambre, Nom_chambre, capacite, douche, exposition, photo, prix FROM chambres INNER JOIN tarifs ON chambres.tarif_id = tarifs.tarif_id"); 
    $dchambre->num_rows;
    echo '<table class="table table-hover" style="text-align:center; margin-bottom:0; background-color:white;"> <tr>';

    while($colonne = $dchambre->fetch_field())
    {    
        echo'<th>' . $colonne->name . '</th>';
    }
     echo '<th scope="col">Modification</th>
          <th scope="col">Suppression</th>
      </tr>';
         
   
      while ($ligne = $dchambre->fetch_assoc())
      {
        echo '<tr>';
        foreach ($ligne as $indice => $information)
        {
            if($indice == "photo")
            {
                echo '<td><img src="' . $information . '" ="70" height="70"></td>';
            }
            else
            {
                echo '<td>' . $information . '</td>';
            }
        }
            echo '<td style="width:15%;"><a href="modif-chambre.php?action=modificationChambres&id_chambre='. $ligne['id_chambre'] .'" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg></a></td>
              <td style="width:15%;"><a href="?action=supressionChambres&id_chambre='. $ligne['id_chambre'] .'" style="color:black;"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
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