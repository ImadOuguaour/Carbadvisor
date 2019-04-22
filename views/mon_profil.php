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
        include './header.php';
    ?>
    <?php 
        
        require_once $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/controler/UtilisateurRepository.php';
        include '../api/edit_utilisateur.php';
        $utilisateur = new UtilisateurRepository();
        $utilisateur = $utilisateur->getUserById($_SESSION['pseudo']);
        
    ?>
    <?php 
        if(isset($_SESSION['alert_update_user']) && $_SESSION['alert_update_user'] == 0){
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo $_SESSION['pseudo'] ?> ! Votre profil est bien mis à jour</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
        }
    ?>
    <br/><br />
    <div class='container'>
        <h2>Détail profil | <strong><?php echo $utilisateur->getPseudo() ?></strong></h2>
        <div class='row'>   
            <div class="card col-md-4" >
                <img class="card-img-top" src="../assets/images/user_avatar.png" alt="Card image" >
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $utilisateur->getPseudo() ?></h4>
                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $utilisateur->getMail() ?></p>
                    
                </div>
            </div>
            <div class='col-md-1'></div>
            <div class='col-md-4'>
                <form action="" method='post'>
                    <div class="form-group">
                        <label for="pseudo_edit">Pseudo :</label>
                        <input readonly type="pseudo_edit" name='pseudo_edit' class="form-control" id="pseudo_edit" 
                                value='<?php echo $utilisateur->getPseudo() ?>'>
                    </div>
                    <div class="form-group">
                        <label for="mail_edit">Email address :</label>
                        <input type="email" name='mail_edit' class="form-control" id="mail_edit"
                        value='<?php echo $utilisateur->getMail() ?>'>
                    </div>
                    <div class="form-group">
                        <label for="description">Description :</label>
                        <textarea class="form-control" name='description' rows="5" id="description">
                            <?php echo $utilisateur->getDescription() ?>
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </form>
            </div>
            <div class='col-md-1'></div>
            <div>  
                <br />
                <h6>Nombre d'avis <span class="badge badge-info"><?php echo $utilisateur->getNbavis() ?></span></h6>
                <br/><h6>Nombre de like <span class="badge badge-success"><?php echo $utilisateur->getNblike() ?></span></h6>
                <br /><h6>Nombre de noLike <span class="badge badge-danger"><?php echo $utilisateur->getNbnolike() ?></span></h6>
                <br /><h6>Nombre de posts <span class="badge badge-secondary"><?php echo $utilisateur->getNbposts() ?></span></h6>
                <br /><h6>Total <span class="badge badge-primary"><?php echo $utilisateur->getTotal() ?></span></h6>
            </div>
        </div>
    </div>
    <br /><br />

</body>

<?php
    include $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/fichiers_requis_js.php';
?>
</html>