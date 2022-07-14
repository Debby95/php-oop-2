<?php
    class Products {
        public $toys;
        public $food;
        public $users;
        public $toysPrice;
        public $foodPrice;





        /**
         * Get the value of toys
         */ 
        public function getToys()
        {
                return $this->toys;
        }

        /**
         * Set the value of toys
         *
         * @return  self
         */ 
        public function setToys($toys)
        {
                $this->toys = $toys;

                return $this;
        }

        /**
         * Get the value of food
         */ 
        public function getFood()
        {
                return $this->food;
        }

        /**
         * Set the value of food
         *
         * @return  self
         */ 
        public function setFood($food)
        {
                $this->food = $food;

                return $this;
        }

        /**
         * Get the value of users
         */ 
        public function getUsers()
        {
                return $this->users;
        }

        /**
         * Set the value of users
         *
         * @return  self
         */ 
        public function setUsers($users)
        {
                $this->users = $users;

                return $this;
        }

        /**
         * Get the value of toysPrice
         */ 
        public function getToysPrice()
        {
                return $this->toysPrice;
        }

        /**
         * Set the value of toysPrice
         *
         * @return  self
         */ 
        public function setToysPrice($toysPrice)
        {
                $this->toysPrice = $toysPrice;

                return $this;
        }

        /**
         * Get the value of foodPrice
         */ 
        public function getFoodPrice()
        {
                return $this->foodPrice;
        }

        /**
         * Set the value of foodPrice
         *
         * @return  self
         */ 
        public function setFoodPrice($foodPrice)
        {
                $this->foodPrice = $foodPrice;

                return $this;
        }
    };