<?php

    require_once __DIR__ ."/animal_products.php";

    class Food extends Products {
        private $expiry;
        private $ingredients;

        function __construct($_price, $_title, $_expiry, $_ingredients)
        {
                parent::__construct($_price, $_title);

                $this->setExpiry($_expiry);
                $this->setIngredients($_ingredients);
        }




        /**
         * Get the value of expiry
         */ 
        public function getExpiry()
        {
                return $this->expiry;
        }

        /**
         * Set the value of expiry
         *
         * @return  self
         */ 
        public function setExpiry($expiry)
        {
                $this->expiry = $expiry;

                return $this;
        }

        /**
         * Get the value of ingredients
         */ 
        public function getIngredients()
        {
                return $this->ingredients;
        }

        /**
         * Set the value of ingredients
         *
         * @return  self
         */ 
        public function setIngredients($ingredients)
        {
                $this->ingredients = $ingredients;

                return $this;
        }
    }