<?php 

    class Product
    {
        // generic info of products on sale
        public $images;
        public $title;
        public $price;
        public $type;
        public $categories;


        // dichiaro l'ordine in cui vanno inseriti e visti i dati / I state the order in which the data should be entered and viewed
        public function __construct(
            $images,$title,$price,$type,$categories 
        )
        {
            $this->images = $images; 
            $this->title = $title; 
            $this->price = $price;    
            $this->type = $type;
            $this->categories = $categories; 

        }
    }