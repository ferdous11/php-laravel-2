<?php
class Product {
    private $id;
    private $name;
    private $price;
    
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->getFormattedPrice();
    }

    function getFormattedPrice(){
        $this->price = "$".number_format((float)$this->price, 2, '.', '');
    }

    function showDetails(){
        echo "Product Details:\n- ID: {$this->id}\n- Name: {$this->name}\n- Price: {$this->price}\n";
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 21343);
$product->showDetails();