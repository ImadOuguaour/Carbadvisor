<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/controler/StationRepository.php';
    //require $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/controler/UtilisateursStationsRepository.php';
    $station_detail = new StationRepository();
    $station_detail = $station_detail->getStationById($_GET['id']);
    if(isset($_POST['like_station']) && $_POST['like_station'] != ''){
        $new_station_liker = new StationRepository();
    }
?>
<html>
<title>Carbadvisor</title>
<head>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <?php
        include './header.php'
    ?>

    
    <div class='container'>
        <br/>
        <?php
        if(isset($_SESSION['connected']) && $_SESSION['connected'] == true) {
        ?>
            <br />
            <div class="float-right ">
                <form method='POST'>
                    <input type='hidden' name='like_station' value="<?php echo $station_detail->id ?>" />
                    <button class='btn btn-success'>Liker <i class="fa fa-lg fa-thumbs-up" aria-hidden="true"></i></button>
                </form>
            </div><br/><br/>
        <?php
            }
        ?>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <span class="navbar-brand mb-0 h1">Nos Carburants</span>
        </nav>
        <br />
        <div class="card-group">
            <?php 
                foreach($station_detail->prix as $station){
            ?>
            <div class="card">
                <img src="../assets/images/gazol.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $station->libellecarburant ?></h5>
                        <p class="card-text">Prix <span class="badge badge-info"><?php echo $station->valeur ?> <i class="fa fa-euro"></i></span></p>
                        <p class="card-text"><small class="text-muted">Dernière mise à jour <span class="badge badge-primary"><?php echo $station->maj ?></span></small></p>
                    </div>
            </div>
            <?php
                }
            ?>
        </div>
        <br /><br />
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <span class="navbar-brand mb-0 h1">Nos Services</span>
        </nav>
        <div class="row no-gutters">
            <div class="col-md-4">
                <br />
                <img src="../assets/images/service_station.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <?php if($station_detail->services) {?>
                    <ul class="list-group">
                        <?php 
                            foreach($station_detail->services as $service){
                        ?>
                        <li class="list-group-item"><?php echo $service ?></li>
                        <?php
                            }
                        ?>
                    </ul>
                    <?php 
                        }else{
                            echo "Pas de services disponible";
                        }
                    ?>
                </div>
            </div>
        </div>
        <br /><br />
    </div>
</body>

<?php
    include $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/fichiers_requis_js.php';
?>
</html>