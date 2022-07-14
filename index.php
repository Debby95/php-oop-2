<?php 

require_once "class/animal_food.php";
require_once "class/animal_products.php";
require_once "class/animal_toys.php";

$products = new Products();
$food = new Food();
$toys = new Toys();

$products->setproductName("Nome Prodotto");
$products->setproductPrice("Prezzo Prodotto");

$food->setCroccantini("Monge");
$food->setBiscotti("Pedigree Biscrock Orginal");

$toys->setPalla("Rossa");
$toys->setCorda("Intrecciata, gialla, blu e verde");
$toys->setPeluche("Orsacchiotto marrone");

var_dump($products, $food, $toys);