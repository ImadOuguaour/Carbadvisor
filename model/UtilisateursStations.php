<?php
    class UtilisateursStations {
        
        private $pseudo;
        private $station;

        public function __construct(array $data){
            //Hydratation
            
            foreach ($data as $cle => $valeur){
                $method = 'set'.ucfirst($cle);
                if (method_exists($this, $method)) {
                    $this->$method($valeur);
                }
            }
        }

        /**
         * @return mixed
         */
        public function getPseudo()
        {
            return $this->pseudo;
        }

        /**
         * @param mixed $pseudo
         */
        public function setPseudo($pseudo)
        {
            $this->pseudo = $pseudo;
        }

        /**
         * @return mixed
         */
        public function getStation()
        {
            return $this->station;
        }

        /**
         * @param mixed $pseudo
         */
        public function setStation($station)
        {
            $this->station = $station;
        }
}