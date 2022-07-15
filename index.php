<?php 

require_once "class/animal_food.php";
require_once "class/animal_products.php";
require_once "class/animal_toys.php";
require_once "class/users.php";

$products = [
    new Food(4.00, "Pedigree Biscrock Orginal", "09/10/2022", ["cereali", "carne", "oli e grassi"]),
    new Food(30,00, "Monge Natural Superpremium", "12/03/2024", ["pollo", "riso", "pesce"]),
    new Toys(3,50, "Palla", "Plastic", "Blue"),
    new Toys(8,30, "Corda", "Cotone", "Yellow and blue"),
];



var_dump($products);

/*
$products = new Products();
$food = new Food();
$toys = new Toys();
$users = new Users();

$products->setToys("Palla, Corda, Peluche");
$products->setFood("Croccantini, Biscotti");
$products->setToysPrice("8€");
$products->setFoodPrice("30,00€, 4,00€");

$food->setCroccantini("Monge");
$food->setBiscotti("Pedigree Biscrock Orginal");

$toys->setPalla("Rossa");
$toys->setCorda("Intrecciata, gialla, blu e verde");
$toys->setPeluche("Orsacchiotto marrone");

$users->setFirstName("Martina");
$users->setLastName("Verdi");
$users->setEmail("martyverdi@email.it");

var_dump($products, $food, $toys, $users); */ 