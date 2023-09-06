<?php 
require_once __DIR__ . '/product.php';

    class Food extends Product
    {
        public $deadline;
        public $quality;
        public $aliment;
        public $info;
        

        public function __construct
        (
            $title,$aliment,$info,$quality,$deadline,$price,$categories
        )
        {
            $this->title = $title;
            $this->aliment = $aliment;
            $this->info = $info;
            $this->quality = $quality;
            $this->deadline = $deadline;
            $this->price = $price;
            $this->categories = $categories;

        }
    }