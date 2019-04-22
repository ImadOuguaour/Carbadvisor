<?php
    class Cours {
        
        private $id_cours;
        private $titre;
        private $resume;
        
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
        public function getId_cours()
        {
            return $this->id_cours;
        }
    
        /**
         * @return mixed
         */
        public function getTitre()
        {
            return $this->titre;
        }
    
        /**
         * @return mixed
         */
        public function getResume()
        {
            return $this->resume;
        }
    
        /**
         * @param mixed $id_cours
         */
        public function setId_cours($id_cours)
        {
            $this->id_cours = $id_cours;
        }
    
        /**
         * @param mixed $titre
         */
        public function setTitre($titre)
        {
            $this->titre = $titre;
        }
    
        /**
         * @param mixed $resume
         */
        public function setResume($resume)
        {
            $this->resume = $resume;
        }
    
        
        
        
        
       
    }

?>