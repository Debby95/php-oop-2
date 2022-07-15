<?php

require_once __DIR__ ."/animal_products.php";

class Shampoo extends Products {
    private $components;
    private $description;

    function __construct($_price, $_title, $_components, $_description)
    {
            parent::__construct($_price, $_title);

            $this->setComponents($_components);
            $this->setDescription($_description);
    }



    /**
     * Get the value of components
     */ 
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Set the value of components
     *
     * @return  self
     */ 
    public function setComponents($components)
    {
        $this->components = $components;

        return $this;
    }





    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}