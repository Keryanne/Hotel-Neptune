<?php
require_once("../init/init.php");
require_once("../init/haut-page-admin.php");
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
   
    <table class="table table-hover" style="text-align:center; margin-bottom:0;">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Civilité</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Code Postal</th>
            <th scope="col">Ville</th>
            <th scope="col">Modification</th>
            <th scope="col">Suppression</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mademoiselle</td>
            <td>Dumas</td>
            <td>Sandrine</td>
            <td>15 allée des Tilleuls</td>
            <td>75010</td>
            <td>Paris</td>
            <td style="width:15%;"><a href="<?php echo RACINE_SITE; ?>pages-admin/modif-chambre.php"><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/pencilmono_105944.png" alt=""></a></td>
            <td style="width:15%;"><a href=""><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/crossmono_105892.png" alt=""></a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Monsieur</td>
            <td>Morin</td>
            <td>Karl</td>
            <td>North avenue 44</td>
            <td>TW9 3</td>
            <td>Kew</td>
            <td><a href="<?php echo RACINE_SITE; ?>pages-admin/modif-chambre.php"><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/pencilmono_105944.png" alt=""></a></td>
            <td><a href=""><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/crossmono_105892.png" alt=""></a></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Madame</td>
            <td>Morin</td>
            <td>Joélle</td>
            <td>34 rue Saint denis</td>
            <td>67000</td>
            <td>Strasbourg</td>
            <td><a href="<?php echo RACINE_SITE; ?>pages-admin/modif-chambre.php"><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/pencilmono_105944.png" alt=""></a></td>
            <td><a href=""><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/crossmono_105892.png" alt=""></a></td>
          </tr>
        </tbody>
      </table>
</div>
 
<?php 
require_once("../init/bas-page.php");
?>