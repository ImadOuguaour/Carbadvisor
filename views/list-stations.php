<?php 
    if(isset($_GET['ville']) && $_GET['ville'] != ''){
        $ville = $_GET['ville'];
    }else{
        $ville = 'Lille';
    }
    require $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/controler/StationRepository.php';
    $stations = new StationRepository();
    $stations = $stations->getAll($ville);
?>
<div class='row'>
    <?php 
        if($stations != false) {
            foreach($stations as $station){
    ?>
    <div class="col-sm-3">
        <div class="card" >
            <img class="card-img-top" src="assets/images/carb.png" alt="">
            <div class="card-body">
                <h5 class="card-title">Ville  <span class="badge badge-light"><?php echo $ville?></span></h5>
                <h6 class="card-text">Latitude  <span class="badge badge-light"><?php echo $station->latitude?></span></h6>
                <p class="card-text">Distance  <span class="badge badge-info"><?php echo $station->distance?> km</span></p>
                <a href="views/details-station.php?id=<?php echo $station->id ?>" class="btn btn-sm btn-primary">Détails ...</a>
            </div>
        </div>
        <br>
    </div>
    <?php
            }
        }else{
    ?>
        <br/>
        <p class="justify-center">Aucune station n'est disponible</p>
    <?php
            
        }
    ?>
</div>
<br /><br />