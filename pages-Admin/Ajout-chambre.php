<?php
require_once("../init/init.php");
require_once("../init/haut-page.php");
?>
 <form action="" style="background-color:white;">
        <br>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nom de la chambre">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Prix">
            </div>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Capacité</label>
            <select id="inputState" class="form-control">
              <option selected>...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <br>
        <div class="form-group col-md-4">
        <label for="inputState">Etage</label>
        <select id="inputState" class="form-control">
            <option selected>...</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        </div>
        <br>
        <div class="form-group col-md-4">
            <label for="inputState">Exposition</label>
            <select id="inputState" class="form-control">
                <option selected>...</option>
                <option>Port</option>
                <option>Rempart</option>
            </select>
            </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlFile1">Photos</label><br>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Ajouté</button>
        <!--<button type="submit" class="btn btn-primary">Enregistré</button>    Pour la page de modification-->
    </form>
<?php 
require_once("../init/bas-page.php");
?>