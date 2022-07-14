<?php

    class Toys extends Products{
        public $palla;
        public $corda;
        public $peluche;

        /**
         * Get the value of palla
         */ 
        public function getPalla()
        {
                return $this->palla;
        }

        /**
         * Set the value of palla
         *
         * @return  self
         */ 
        public function setPalla($palla)
        {
                $this->palla = $palla;

                return $this;
        }

        /**
         * Get the value of corda
         */ 
        public function getCorda()
        {
                return $this->corda;
        }

        /**
         * Set the value of corda
         *
         * @return  self
         */ 
        public function setCorda($corda)
        {
                $this->corda = $corda;

                return $this;
        }

        /**
         * Get the value of peluche
         */ 
        public function getPeluche()
        {
                return $this->peluche;
        }

        /**
         * Set the value of peluche
         *
         * @return  self
         */ 
        public function setPeluche($peluche)
        {
                $this->peluche = $peluche;

                return $this;
        }
    }