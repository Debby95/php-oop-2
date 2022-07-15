<?php 

require_once "class/animal_food.php";
require_once "class/animal_products.php";
require_once "class/animal_toys.php";
require_once "class/animal_bed.php";
require_once "class/animal_shampoo.php";
require_once "class/users.php";

$products = [
    new Food(4.00, "Pedigree Biscrock Orginal", "09/10/2022", ["cereali", "carne", "oli e grassi"]),
    new Food(30.00, "Monge Natural Superpremium", "12/03/2024", ["pollo", "riso", "pesce"]),
    new Toys(3.50, "Palla", "Plastic", "Blue"),
    new Toys(8.30, "Corda", "Cotone", "Yellow and blue"),
    new Bed(102.99, "Cuccia per cani Ferplast Dogvilla", "Plastic", "White and brown"),
    new Bed(68.99, "Cuccia per cani Spike Classic", "Legno di cipresso", "brown"),
    new Shampoo(3.99, "Trixie Shampoo Aloe Vera", "5-15% tensioattivi anionici, <5% tensioattivi anfoteri, tensioattivi non ionici, profumo, agenti conservanti (metilcloroisotiazolinone, metilisotiazolinone).", "specifico per la pelle e il pelo delicati dei cuccioli, ideale per la cura e pulizia regolare del mantello."),
    new Shampoo(3.29, "Trixie Shampoo cuccioli", "5-15 % tensioattivi anionici, < 5 % tensioattivi anfoteri, tensioattivi non-ionici, profumo, agenti conservanti.", "Questo shampoo è particolarmente indicato per cani con cute sensibile. Assorbe l'umidità presente sulla cute e ha una azione antibatterica e antiinfiammatoria. Conferisce al pelo la sua naturale morbidezza, lucentezza e vitalità. PH 6,5-7,5."),
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