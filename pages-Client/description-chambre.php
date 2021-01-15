<?php
require_once("../init/init.php");
require_once("../init/haut-page.php");
?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/business-casual.min.css" rel="stylesheet">
<script>

$('#myModal').on('shown.bs.modal', function () {
$('#myInput').trigger('focus')
})

</script>

<?php 
    $donnees = executeRequete("SELECT DISTINCT * FROM chambres INNER JOIN tarifs ON chambres.tarif_id = tarifs.tarif_id"); 

    while($chambres = $donnees->fetch_assoc())
    {
        echo '<div style="display:flex; justify-content:center; margin-top:20px;">
        <div class="card mb-3" style="max-width: auto; margin-right:20px; margin-left:20px">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="https://www.usine-digitale.fr/mediatheque/3/9/8/000493893_homePageUne/hotel-c-o-q-paris.jpg" alt="Chambre" style="width: 100%; height: 100%;">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">'. $chambres['Nom_chambre'] .'</h5>
                <p class="card-text"><small class="text-muted">'. $chambres['Nom_chambre'] .'</small></p>
                <p class="card-text">Capacité : '. $chambres['capacite'] .' personnes</p>';
               
                if($chambres['douche']==1)
                {
                    echo "<p class='card-text'>Cette chambre possède une salle d'eau privative</p>";
                }
                else
                {
                    echo "<p class='card-text'>Cette chambre possède une salle de bain privative</p>";
                }
                
                echo '<p class="card-text">Elle est vue '. $chambres['exposition'] .'</p>
                <p class="card-text">Elle se situe au '. $chambres['etage'] .'ème</p>
            </div>
            <div style="margin-bottom:5px;">
            <a href="<?php echo RACINE_SITE; ?>pages-Client/chambres.php" class="btn btn-primary">Retour aux chambres</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Réservez
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
                            <p>Pour réserver, appelez au  04 67 50 88 00</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>';
    }
?>

<?php 
require_once("../init/bas-page.php");
?>