<?php 
    if(isset($_SESSION['alert_success']) && $_SESSION['alert_success'] == 0){
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Bienvenu !</strong> <?php echo $_SESSION['pseudo'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
    }
?>
<?php 
    if(isset($_SESSION['alert_danger']) && $_SESSION['alert_danger'] == 0){
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Désolé !</strong> Veuillez vérifier vos coordonnées
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
    }
?>

<?php 
    if(isset($_SESSION['alert_new_user']) && $_SESSION['alert_new_user'] == 0){
?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Merci pour votre inscription !</strong> Votre compte est créer avec succèss, veuillez se connecter
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
    }
?>