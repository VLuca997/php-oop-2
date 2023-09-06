<?php
require_once __DIR__ . '/product.php';
    class Categories
    {
        public  $breed;
        public $icon;

        public function __construct(
            $breed,
            $icon,
        )
        {
            $this->breed = $breed;
            $this->icon = $icon;
        }
    }