<?php
// On enregistre notre autoload.
// function chargerClasse($classname)
// {
//     require '../model/'.$classname.'.php';
// }

// spl_autoload_register('chargerClasse');


class StationRepository
{


    public function __construct()
    {
        
    }

    public function getAll($ville)
    {
        $response = file_get_contents('http://webtp.fil.univ-lille1.fr/~clerbout/carburant/recherche.php?commune='.$ville.'&carburants=1');
        $response = json_decode($response);
        if(!empty($response->data)){
            return $response->data;
        }
        return false;        
    }

    public function getStationById($id){
        $response = file_get_contents('http://webtp.fil.univ-lille1.fr/~clerbout/carburant/infoStation.php?id='.$id);
        $response = json_decode($response);
        return $response->data;
    }
    
}
?>