<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/controler/UtilisateurRepository.php';
if(isset($_POST['pseudo_has_account']) && isset($_POST['password_has_account'])){
    $pseudo = $_POST['pseudo_has_account'];
    $password = $_POST['password_has_account'];
    $utilisateur = new UtilisateurRepository();
    $verif_connexion = $utilisateur->checkUser($pseudo , $password);
    if($verif_connexion == true){
        $_SESSION['connected'] = true;
        $_SESSION['alert_success'] = 0;
        $_SESSION['alert_danger'] = 1;
        $_SESSION['pseudo'] = $_POST['pseudo_has_account'];
    }else{
        $_SESSION['alert_danger'] = 0;
        $_SESSION['alert_success'] = 1;
        $_SESSION['connected'] = false;
    }
}else{
    $_SESSION['alert_danger'] = 1;
    $_SESSION['alert_success'] = 1;
}

if(isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['password'])){
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $utilisateur = new UtilisateurRepository();
    $creerUser = $utilisateur->newUser($pseudo , $email , $password);
    if($creerUser == 0){
        $_SESSION['alert_new_user'] = 0;
    }
}else{
    $_SESSION['alert_new_user'] = 1;
}

?>