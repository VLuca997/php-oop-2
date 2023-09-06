<?php 
    require_once __DIR__ . '/mydb.php';
    require_once __DIR__ . '/arrayList.php';

var_dump($dogCategories);
var_dump($dogShampoo);
var_dump($dogFood);
var_dump($catCategories);
var_dump($catShampoo);
var_dump($catFood);
var_dump($antiFlea);
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
            <div class="row">
                <?php
                foreach ($DogProducts as $DogProduct) { ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">

                            <h2>
                                <?= $DogProduct->title ; ?>
                            </h2>
                            <h4 class="text-success">
                                <?= $DogProduct->price ; ?> €
                            </h4>
                            <h4>
                                <?= $DogProduct->type ; ?>
                            </h4>
                        </div>
                    </div>
                        
                </div>
                <?php }?>
            </div>
            <div class="row">
                <?php
                foreach ($CatProducts as $CatProduct) { ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">

                            <h2>
                                <?= $CatProduct->title ; ?>
                            </h2>
                            <h4 class="text-success">
                                <?= $CatProduct->price ; ?> €
                            </h4>
                            <h4>
                                <?= $CatProduct->type ; ?>
                            </h4>
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








