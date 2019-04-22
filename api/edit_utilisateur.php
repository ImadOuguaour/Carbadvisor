<?php
if(isset($_POST['mail_edit']) || isset($_POST['description'])){
    $pseudo = $_POST['pseudo_edit'];
    $email = $_POST['mail_edit'];
    $description = $_POST['description'];
    $update_user = new UtilisateurRepository();
    $update_user = $update_user->updateUser($pseudo , $email , $description);
    if($update_user == 0){
        $_SESSION['alert_update_user'] = 0;
    }
}else{
    $_SESSION['alert_update_user'] = 1;
}

?>