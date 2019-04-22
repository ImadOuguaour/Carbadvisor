<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/model/Utilisateur.php';
require $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/model/connexion.php';

class UtilisateurRepository{
    
    private $con;

    public function __construct()
    {
        $this->con = Connexion::getInstance();
    }

    public function checkUser($pseudo , $password)
    {
        $sql = "select * from utilisateurs where pseudo ='".$pseudo."' and password ='".$password."'";
        try{
            $result = $this->con->query($sql);
            $rows = $result->fetchAll();
            if(count($rows))
                return true;
            else 
                return false;
        }catch(SQLException $e){
            return false;
        }
    }

    public function newUser($pseudo , $email, $password)
    {
        $sql = "insert into utilisateurs(pseudo,password,mail)
                  values('".$pseudo."','".$password."','".$email."')";
        if ($this->con->query($sql) === TRUE) {
            return 1;
        } else {
            return 0;
        }

    }
    public function getUserById($pseudo){
        $sql = "Select * from utilisateurs where pseudo ='".$pseudo."'";
        $resultat = $this->con->query($sql)->fetch();
        $utilisateur = new Utilisateur($resultat);
        return $utilisateur;
        
    } 

    public function updateUser($pseudo , $email , $description){
        $sql = "update utilisateurs SET mail=?, description=? WHERE pseudo=?";
        $stmt= $this->con->prepare($sql);
        $stmt->execute([$email , $description , $pseudo]);
        return 0;
    }
}

?>