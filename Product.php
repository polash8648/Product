<?php
class Product {
    private $id;
    private $name;
    private $price;

    // Constructor to initialize the properties
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Method to get the formatted price
    public function getFormattedPrice() {
        return number_format($this->price, 2);
    }

    // Method to show product details
    public function showDetails() {
        echo "Product ID: {$this->id}\n";
        echo "Product Name: {$this->name}\n";
        echo "Product Price: $" . $this->getFormattedPrice() . "\n";
    }
}

// Example usage of the Product class
$product = new Product(1, "Sample Product", 19.99);
$product->showDetails();
?>