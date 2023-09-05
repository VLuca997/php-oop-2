<?php 
require_once __DIR__ . '/classes/categories.php';
require_once __DIR__ . '/classes/food.php';// extend product.php
require_once __DIR__ . '/classes/toys.php';// extend product.php
require_once __DIR__ . '/classes/petBed.php';// extend product.php
require_once __DIR__ . '/classes/product.php';


$dogCategories = new Categories
(
    'Dog',
    'ICON'

);
$dogRubberBone = new Product
(
        'Rubber Bone',
        9.99,
        $dogCategories,
        'Images',
);


var_dump($dogCategories);
var_dump($dogRubberBone);
