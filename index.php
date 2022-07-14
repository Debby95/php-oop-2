<?php 

require_once "class/animal_food.php";
require_once "class/animal_products.php";
require_once "class/animal_toys.php";
require_once "class/users.php";

$products = new Products();
$food = new Food();
$toys = new Toys();
$users = new Users();

$products->setproductName("Nome Prodotto");
$products->setproductPrice("Prezzo Prodotto");

$food->setCroccantini("Monge");
$food->setBiscotti("Pedigree Biscrock Orginal");

$toys->setPalla("Rossa");
$toys->setCorda("Intrecciata, gialla, blu e verde");
$toys->setPeluche("Orsacchiotto marrone");

$users->setFirstName("Martina");
$users->setLastName("Verdi");
$users->setEmail("martyverdi@email.it");

var_dump($products, $food, $toys, $users);