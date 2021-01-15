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
            <th scope="col">Capacité</th>
            <th scope="col">Exposition</th>
            <th scope="col">Douche</th>
            <th scope="col">Etage</th>
            <th scope="col">Tarif</th>
            <th scope="col">Modification</th>
            <th scope="col">Suppression</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>2</td>
            <td>Port</td>
            <td>0</td>
            <td>1</td>
            <td>30€</td>
            <td style="width:15%;"><a href="<?php echo RACINE_SITE; ?>pages-admin/modif-chambre.php"><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/pencilmono_105944.png" alt=""></a></td>
            <td style="width:15%;"><a href=""><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/crossmono_105892.png" alt=""></a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>4</td>
            <td>Rempart</td>
            <td>0</td>
            <td>2</td>
            <td>30€</td>
            <td><a href="<?php echo RACINE_SITE; ?>pages-admin/modif-chambre.php"><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/pencilmono_105944.png" alt=""></a></td>
            <td><a href=""><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/crossmono_105892.png" alt=""></a></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>2</td>
            <td>Port</td>
            <td>1</td>
            <td>3</td>
            <td>30€</td>
            <td><a href="<?php echo RACINE_SITE; ?>pages-admin/modif-chambre.php"><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/pencilmono_105944.png" alt=""></a></td>
            <td><a href=""><img style="width: 50px;" src="https://cdn.icon-icons.com/icons2/1518/PNG/512/crossmono_105892.png" alt=""></a></td>
          </tr>
        </tbody>
      </table>
</div>
 
<?php 
require_once("../init/bas-page.php");
?>