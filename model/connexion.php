<?php

class Connexion
{
    private static $bdd;
    
    function __construct() {
    }
    
    public static function getInstance() {
        
        if (self::$bdd == NULL) {
            try {
                //create connexion
                self::$bdd = new PDO('mysql:host=localhost;dbname=carbadvisor;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                return self::$bdd;
            } catch (Exception $e) {
                die('Erreur : '.$e->getMessage());
            }
        }else{
            return self::$bdd;
        }
    }
    
    
  
}
?>