<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/controler/StationRepository.php';
    $stations = new StationRepository();
    $stations = $stations->getAll();
?>
<div class='row'>
    <?php 
        foreach($stations as $station){
    ?>
    <div class="col-sm-3">
        <div class="card" >
            <img class="card-img-top" src="assets/images/carb.png" alt="">
            <div class="card-body">
                <h5 class="card-title">Latitude  <span class="badge badge-light"><?php echo $station->latitude?></span></h5>
                <p class="card-text">Distance  <span class="badge badge-info"><?php echo $station->distance?> km</span></p>
                <a href="views/details-station.php?id=<?php echo $station->id ?>" class="btn btn-sm btn-primary">Détails ...</a>
            </div>
        </div>
        <br>
    </div>
    <?php
        }
    ?>
</div>
<br /><br />