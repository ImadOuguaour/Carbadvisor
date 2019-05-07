<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/model/UtilisateursStations.php';
require $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/model/connexion.php';

class UtilisateursStationsRepository{
    
    private $con;

    public function __construct()
    {
        $this->con = Connexion::getInstance();
    }

    public function checkUserStationLiker($pseudo , $station)
    {
        $sql = "select * from utilisateurs_stations where pseudo ='".$pseudo."' and station ='".$station."'";
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

    public function newUserStationLiker($pseudo , $station)
    {
        $sql = "insert into utilisateurs_stations(pseudo,station)
                  values('".$pseudo."','".$station."')";
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