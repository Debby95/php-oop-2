<?php

    require_once __DIR__ ."/animal_products.php";

    class Food extends Products {
        public $croccantini;
        public $biscotti;


        /**
         * Get the value of croccantini
         */ 
        public function getCroccantini()
        {
                return $this->croccantini;
        }

        /**
         * Set the value of croccantini
         *
         * @return  self
         */ 
        public function setCroccantini($croccantini)
        {
                $this->croccantini = $croccantini;

                return $this;
        }

        /**
         * Get the value of biscotti
         */ 
        public function getBiscotti()
        {
                return $this->biscotti;
        }

        /**
         * Set the value of biscotti
         *
         * @return  self
         */ 
        public function setBiscotti($biscotti)
        {
                $this->biscotti = $biscotti;

                return $this;
        }
    }