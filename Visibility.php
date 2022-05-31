<?php

require_once "Data/Product.php";

$product = new Product("Apple", 30000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 2000);
$dummy->info();