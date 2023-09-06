<?php 
    require_once __DIR__ . '/mydb.php';
    require_once __DIR__ . '/arrayList.php';

var_dump($dogCategories);
var_dump($DogProducts);
var_dump($DogFoods);
var_dump($DogToys);
var_dump($catCategories);
var_dump($catShampoo);
var_dump($CatFoods);
var_dump($CatToys);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITOLO PAGE -->
    <title>OOP 2</title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONT GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- CSS -->

    <link rel="stylesheet" href="css/style.css">

    
</head>
<body>
    <div class="container">
            <header>
                <h1 class="text-danger text-center">MY PET SHOP</h1>
            </header>
            <!-- ONLY DOGS -->
            <div class="row">
                <h3>Prodotti per cani</h3>
                <?php
                foreach ($DogProducts as $DogProduct) { ?>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">

                            <h2>
                                <?= $DogProduct->title ; ?>
                            </h2>
                            <p class="text-success">
                                <?= $DogProduct->price ; ?> €
                            </p>
                            <p>
                                <?= $DogProduct->type ; ?>
                            </p>
                            <p>
                                <?= $dogCategories->breed ; ?>
                                <?= $dogCategories->icon; ?>;
                            </p>
                        </div>
                    </div>
                        
                </div>
                <?php }?>
            </div> 

            <div class="row">
                <h3>Cibo Per Cani</h3>
                <?php
                foreach ($DogFoods as $DogFood) { ?>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">

                            <h2>
                                <?= $DogFood->title ; ?>
                            </h2>
                            <p>
                                <?= $DogFood->type ; ?>
                            </p>
                            <p>
                                <?= $DogFood->aliment ; ?>
                            </p>
                            <p>
                                <?= $DogFood->info ; ?>
                            </p>
                            <p>
                                <?= $DogFood->quality ; ?>
                            </p>
                            <p>
                                <?= $DogFood->deadline ; ?>
                            </p>
                            <p class="text-success">
                                <?= $DogFood->price ; ?> €
                            </p>
                            <p>
                                <?= $dogCategories->breed ; ?>
                                <?= $dogCategories->icon; ?>;
                            </p>
                        </div>
                    </div>
                        
                </div>
                <?php }?>
            </div>
            <div class="row">
                <h3>Giochi Per Cani</h3>
                <?php
                foreach ($DogToys as $DogToy) { ?>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">

                            <h2>
                                <?= $DogToy->title ; ?>
                            </h2>
                            <p class="text-success">
                                <?= $DogToy->price ; ?> €
                            </p>
                            <p>
                                <?= $DogToy->type ; ?>
                            </p>
                            <p>
                                <?= $dogCategories->breed ; ?>
                                <?= $dogCategories->icon; ?>;
                            </p>
                        </div>
                    </div>
                        
                </div>
                <?php }?>
            </div>
            <div class="row">
                <h3>Prodotti per Gatti</h3>
                <?php
                foreach ($CatProducts as $CatProduct) { ?>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">

                            <h2>
                                <?= $CatProduct->title ; ?>
                            </h2>
                            <p class="text-success">
                                <?= $CatProduct->price ; ?> €
                            </p>
                            <p>
                                <?= $CatProduct->type ; ?>
                            </p>
                            <p>
                                <?= $catCategories->breed ; ?>
                                <?= $catCategories->icon; ?>;
                            </p>
                        </div>
                    </div>
                        
                </div>
                <?php }?>
            </div>
            <div class="row">
                <h3>Cibo Per Gatti</h3>
                <?php
                foreach ($CatFoods as $CatFood) { ?>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">

                            <h2>
                                <?= $CatFood->title ; ?>
                            </h2>
                            <p>
                                <?= $CatFood->type ; ?>
                            </p>
                            <p>
                                <?= $CatFood->aliment ; ?>
                            </p>
                            <p>
                                <?= $CatFood->info ; ?>
                            </p>
                            <p>
                                <?= $CatFood->quality ; ?>
                            </p>
                            <p>
                                <?= $CatFood->deadline ; ?>
                            </p>
                            <p class="text-success">
                                <?= $CatFood->price ; ?> €
                            </p>
                            <p>
                                <?= $catCategories->breed ; ?>
                                <?= $catCategories->icon; ?>;
                            </p>
                        </div>
                    </div>
                        
                </div>
                <?php }?>
            </div>
            <div class="row">
                <h3>Giochi Per Gatti</h3>
                <?php
                foreach ($CatToys as $CatToy) { ?>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">

                            <h2>
                                <?= $CatToy->title ; ?>
                            </h2>
                            <p class="text-success">
                                <?= $CatToy->price ; ?> €
                            </p>
                            <p>
                                <?= $CatToy->type ; ?>
                            </p>
                            <p>
                                <?= $catCategories->breed ; ?>
                                <?= $catCategories->icon; ?>;
                            </p>
                        </div>
                    </div>
                        
                </div>
                <?php }?>
            </div>
        </div>













    <!-- JS SCRIPT.JS -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>








