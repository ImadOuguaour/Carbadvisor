<?php
    include $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/api/verification_connexion.php';    
?>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="https://img.icons8.com/dusk/52/000000/gas-station.png" />
            <span class='titleHeader'>
                Carbadvisor
            </span>
    </a>
    <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="/Carbadvisor/index.php"><i class="fa fa-home"></i> Accueil</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/Carbadvisor/index.php"><i class="fa fa-search"></i> Recherche/Consultation</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <?php
            if(isset($_SESSION['connected']) && $_SESSION['connected'] == true) {
        ?>
        <li class="nav-item">
            <a class='nav-link' href="#"><?php echo $_SESSION['pseudo'] ?></a>
        </li>
        <li class="nav-item">
            <a class='nav-link' href="/Carbadvisor/views/mon_profil.php">Mon profil</a>
        </li>
        <li class="nav-item">
            <a class='nav-link' href="/Carbadvisor/views/deconnexion.php">Déconnexion</a>
        </li>
        <?php 
            }
            else{
            ?>
        <li class="nav-item">
            <button data-toggle="modal" data-target="#myModal" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-off"></span> Connexion 
            </button>
        </li>
        <?php } ?>
    </ul>
</nav>
<?php
    include $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/views/alerts_messages.php';
?>
<!-- Modal -->
<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/views/formConnexion.php';
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>