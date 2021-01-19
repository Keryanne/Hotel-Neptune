<?php
require_once("../init/init.php");
require_once("../init/haut-page-admin.php");
?>

<?php
//executeRequete("SELECT * FROM chambres");
//executeRequete("INSERT INTO chambres (id_chambre, Nom_chambre, capacite, exposition, douche, etage, tarif_id) values ('', '$_POST[Nom_chambre]', '$_POST[capacite]', '$_POST[exposition]', '$_POST[douche]', '$_POST[etage]', '$_POST[tarif_id]')");
?>

<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>pages-Client/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo RACINE_SITE; ?>pages-Client/css/bootstrap.css">

<div style="background-color:white;">
<form action="" >
<div style="margin-left:20px; padding-top:20px;">
  
      <h2 style=" font-size: 20px; color: gray;">Trier par</h2>
    <div class="form-row" style="display:flex; flex-direction:row;"> 
        <div class="form-group col-md-2" style="margin-right:10px;">
            <label for="inputState">Capacité</label>
            <select id="inputState" class="form-control">
              <option selected>...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
        </div>
        <div class="form-group col-md-2" style="margin-right:10px;>
            <label for="inputState">Etage</label>
            <select id="inputState" class="form-control">
                <option selected>...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
        </div>
            
        <div class="form-group col-md-2" style="margin-right:10px;>
                <label for="inputState">Exposition</label>
                <select id="inputState" class="form-control">
                    <option selected>...</option>
                    <option value="Port">Port</option>
                    <option value="Rempart">Rempart</option>
                </select>
        </div>
    </div>
  </div>     
        
        <br>
        <br>

        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="justify-content:space-around;">
            <div class="btn-group mr-2" role="group" aria-label="First group">
              <button type="button" class="btn btn-secondary">Ok</button>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
              <button type="button" class="btn btn-secondary">Annuler</button>
            </div>
          </div>

    </form>
    <br>
   
<?php 

echo '<h2>Ajouter une chambre</h2>
<a href="Ajout-chambre.php?action=ajout"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></a>';

  if(isset($_GET['action']) && $_GET['action'] == "affichage")
  {
    $dchambre = executeRequete("SELECT DISTINCT * FROM chambres INNER JOIN tarifs ON chambres.tarif_id = tarifs.tarif_id"); 
    echo '<table class="table table-hover" style="text-align:center; margin-bottom:0;">';

     echo '<thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Capacité</th>
        <th scope="col">Exposition</th>
        <th scope="col">Douche/Baignoire</th>
        <th scope="col">Etage</th>
        <th scope="col">Tarif</th>
        <th scope="col">Modification</th>
        <th scope="col">Suppression</th>
      </tr>
    </thead>
    <tbody>'; 
   
      while ($ligne = $dchambre->fetch_assoc())
      {
        echo '<tr>';
        foreach($ligne as $indice => $information)
        {
          echo '<tr>
            <th scope="row">' . $dchambre . '</th>
            <td>'. $dchambre['capacite'].'</td>
            <td>'. $dchambre['exposition'].'</td>';
            if($dchambre['douche']==1)
                {
                    echo "<td>Douche</td>";
                }
                else
                {
                    echo "<td>Baignoire</td>";
                }
            echo '<td>'. $dchambre['etage'].'</td>
            <td>'. $dchambre['prix'].'</td>
            <td style="width:15%;"><a href="<?php echo RACINE_SITE; ?>pages-admin/modif-chambre.php"><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/pencilmono_105944.png" alt=""></a></td>
              <td style="width:15%;"><a href=""><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/crossmono_105892.png" alt=""></a></td>
            </tr>
            </tbody>
            </table>
            </div>';
        }
      }
          
}

  require_once("../init/bas-page.php");
  ?>