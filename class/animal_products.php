<?php
    class Products {
        public $productName;
        public $productPrice;


        /**
         * Get the value of productName
         */ 
        public function getProductName()
        {
                return $this->productName;
        }

        /**
         * Set the value of productName
         *
         * @return  self
         */ 
        public function setProductName($productName)
        {
                $this->productName = $productName;

                return $this;
        }

        /**
         * Get the value of productPrice
         */ 
        public function getProductPrice()
        {
                return $this->productPrice;
        }

        /**
         * Set the value of productPrice
         *
         * @return  self
         */ 
        public function setProductPrice($productPrice)
        {
                $this->productPrice = $productPrice;

                return $this;
        }
    }

    ;