<?php 

require_once "class/animal_food.php";
require_once "class/animal_products.php";

$products = new Products();
$food = new Food();

$products->SetproductName("Nome Prodotto");
$products->SetproductPrice("Prezzo Prodotto");

$food->SetCroccantini("Monge");
$food->SetBiscotti("Pedigree Biscrock Orginal");

var_dump($products, $food);