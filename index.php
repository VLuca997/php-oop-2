<?php 
// food-php,toys.php,petBed.php, se non hanno un proprio costruttore, ereditano i parametri della superclasse ( Product di product.php)
require_once __DIR__ . '/classes/categories.php';
require_once __DIR__ . '/classes/food.php';// extend product.php  $title,$aliment,$info,$quality,$deadline,$prices,$categories
require_once __DIR__ . '/classes/toys.php';// extend product.php
require_once __DIR__ . '/classes/petBed.php';// extend product.php
require_once __DIR__ . '/classes/product.php';// ordine: images,name,price,kg,categories. 


$dogCategories = new Categories('Dog','ICON');
$catCategories = new Categories('Cat','ICON');

//Product
$dogShampoo = new Product // ordine: images,name,price,type,categories. 
(
    'Images',
    'shampoo pelo corto',
    9.99,
    'pelo corto',
    $dogCategories,
);
$catShampoo = new Product
(
    'Images2',
    "Egypt Exodia Cat Master",
    15,
    'only for Persian',
    $catCategories,
);

//food
$dogFood = new Food // order: $title,$aliment,$info,$quality,$deadline,$prices,$categories
(
    
    'Manzo Croquettes',
    'Manzo',
    'è bona fratè',
    'TOP',
    '30-06-2021',
    20,
    $dogCategories
);
$catFood = new Food
(
    'Chicken Croquettes',
    'Chicken',
    'consigliato da 9 gargamella su 10',
    'TOP',
    '30-06-2029',
    20,
    $catCategories
);
var_dump($dogCategories);
var_dump($dogShampoo);
var_dump($dogFood);
var_dump($catCategories);
var_dump($catShampoo);
var_dump($catFood);









