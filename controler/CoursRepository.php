<?php
require_once 'model/Cours.php';
require 'model/connexion.php';
// On enregistre notre autoload.
// function chargerClasse($classname)
// {
//     require '../model/'.$classname.'.php';
// }

// spl_autoload_register('chargerClasse');


class CoursRepository
{

    private $con;

    public function __construct()
    {
        // Connexion � la base de donn�es
        $this->con = Connexion::getInstance();
    }

    public function getAll()
    {
        return $this->con->query('SELECT * FROM cours');
    }
    
}
?>