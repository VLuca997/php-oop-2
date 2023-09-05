<?php 

    class Product
    {
        // generic info of products on sale
        public string $title;
        public $images;
        public float $price;
        public $categories;


        // dichiaro l'ordine in cui vanno inseriti e visti i dati / I state the order in which the data should be entered and viewed
        public function __construct(
            $title, $price, $categories,$images 
        )
        {
            $this->title = $title; 
            $this->price = $price;    
            $this->categories = $categories; 
            $this->images = $images; 
        }
    }