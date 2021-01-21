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

echo '<h2>Ajouter une chambre</h2>
<a href="Ajout-chambre.php?action=ajout"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></a>';

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
            echo '<td style="width:15%;"><a href="modif-chambre.php?action=modificationChambres&id_chambre='. $ligne['id_chambre'] .'"><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/pencilmono_105944.png" alt=""></a></td>
              <td style="width:15%;"><a href="?action=supressionChambres&id_chambre='. $ligne['id_chambre'] .'"><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/crossmono_105892.png" alt=""></a></td>
            </tr>';
           
        }
       echo '</table>
        </div>';
      }

  require_once("../init/bas-page.php");
  ?>