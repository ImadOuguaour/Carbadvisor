<?php
    class Utilisateur {
        
        private $pseudo;
        private $mail;
        private $password;
        private $ville;
        private $description;
        private $nbavis;
        private $total;
        private $nbposts;
        private $nblike;
        private $nbnolike;
        
        
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
         * @return mixed
         */
        public function getMail()
        {
            return $this->mail;
        }
    
        /**
         * @return mixed
         */
        public function getPassword()
        {
            return $this->password;
        }
    
        /**
         * @return mixed
         */
        public function getVille()
        {
            return $this->ville;
        }
    
        /**
         * @return mixed
         */
        public function getDescription()
        {
            return $this->description;
        }
    
        /**
         * @return mixed
         */
        public function getNbavis()
        {
            return $this->nbavis;
        }
    
        /**
         * @return mixed
         */
        public function getTotal()
        {
            return $this->total;
        }
    
        /**
         * @return mixed
         */
        public function getNbposts()
        {
            return $this->nbposts;
        }
    
        /**
         * @return mixed
         */
        public function getNblike()
        {
            return $this->nblike;
        }
    
        /**
         * @return mixed
         */
        public function getNbnolike()
        {
            return $this->nbnolike;
        }
    
        /**
         * @param mixed $pseudo
         */
        public function setPseudo($pseudo)
        {
            $this->pseudo = $pseudo;
        }
    
        /**
         * @param mixed $mail
         */
        public function setMail($mail)
        {
            $this->mail = $mail;
        }
    
        /**
         * @param mixed $password
         */
        public function setPassword($password)
        {
            $this->password = $password;
        }
    
        /**
         * @param mixed $ville
         */
        public function setVille($ville)
        {
            $this->ville = $ville;
        }
    
        /**
         * @param mixed $description
         */
        public function setDescription($description)
        {
            $this->description = $description;
        }
    
        /**
         * @param mixed $nbavis
         */
        public function setNbavis($nbavis)
        {
            $this->nbavis = $nbavis;
        }
    
        /**
         * @param mixed $total
         */
        public function setTotal($total)
        {
            $this->total = $total;
        }
    
        /**
         * @param mixed $nbposts
         */
        public function setNbposts($nbposts)
        {
            $this->nbposts = $nbposts;
        }
    
        /**
         * @param mixed $nblike
         */
        public function setNblike($nblike)
        {
            $this->nblike = $nblike;
        }
    
        /**
         * @param mixed $nbnolike
         */
        public function setNbnolike($nbnolike)
        {
            $this->nbnolike = $nbnolike;
        }
    
        
       
    }

?>