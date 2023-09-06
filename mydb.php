<?php
    // food-php,toys.php,petBed.php, se non hanno un proprio costruttore, ereditano i parametri della superclasse ( Product di product.php)
require_once __DIR__ . '/classes/categories.php';
require_once __DIR__ . '/classes/food.php';// extend product.php  $title,$aliment,$info,$quality,$deadline,$prices,$categories
require_once __DIR__ . '/classes/toys.php';// extend product.php
require_once __DIR__ . '/classes/petBed.php';// extend product.php
require_once __DIR__ . '/classes/product.php';// ordine: images,name,price,kg,categories. 

//CATEGORIE GENERICHE
$dogCategories = new Categories('Dog','ICON');
$catCategories = new Categories('Cat','ICON');

//PRODOTTI CANI E GATTI
$dogShampoo = new Product // ordine: images,title,price,type,categories. 
(
    'Images',
    'shampoo pelo corto',
    9.99,
    'pelo corto',
    $dogCategories,
);
$antiFlea = new Product // ordine: images,title,price,type,categories. 
(
    'Images',
    'Prodotto Per Pulci',
    21.99,
    'Tutte le razze',
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
$antiZecche = new Product // ordine: images,title,price,type,categories. 
(
    'Images',
    'Prodotto anti Zecche',
    25.99,
    'Tutte i felini',
    $catCategories,
);
//-------------------------------------------------------------------------------------------------



//CIBO GATTI E CANI
$CrocchetteDiManzoMONGE_DOG = new Food // order: $title,$aliment,$info,$quality,$deadline,$prices,$categories
(
    
    'Crocchette di Manzo',
    'Manzo',
    'Cani Adulti',
    'MONGE: per tutte le Razze',
    '30-06-2024',
    49.99,
    $dogCategories
);
$CrocchetteDiSalmoneMONGE_DOG = new Food // order: $title,$aliment,$info,$quality,$deadline,$prices,$categories
(
    
    'Crocchette di Salmone e Riso',
    'Manzo',
    'Cani Adulti',
    'MONGE: per tutte le Razze',
    '10-01-2023',
    29.79,
    $dogCategories
);


$CrocchetteROYAL_CAT = new Food
(
    'Crocchette di Pollo',
    'Pollo',
    'per Gatti fino ai 3 ANNI',
    'ROYAL: Tutte le razze',
    '30-06-2029',
    20,99,
    $catCategories
);
$TonnoSalmonatoROYAL_CAT = new Food
(
    'Mangime misto di Pesce',
    'Tonno e Salmone',
    'Solo per gatti sterilizzti',
    'ROYAL: Tutte le razze',
    '30-06-2029',
    20,99,
    $catCategories
);
//-------------------------------------------------------------------------------------------------

//TOYS
$OssoGommoso_DOG = new Toys (
    'images',
    'Osso Per Cani',
    25,
    'PER CANI ADULTI',
    $dogCategories
);
$CordaRobusta_DOG= new Toys (
    'images',
    'Corda Per Cani',
    5,
    'PER TUTTI LE ETA',
    $dogCategories
);

$GomitoloDiLana_CAT = new Toys (
    'images',
    'Gomitolo in lana di montone montenegrino',
    7,
    'PER TUTTE LE ETA',
    $catCategories
);
$Tiragraffi_CAT = new Toys (
    'images',
    'Cuscino Anti Graffio',
    55,
    'PER GATTI SOTTO AI 5 ANNI',
    $catCategories
);
//-------------------------------------------------------------------------------------------------
