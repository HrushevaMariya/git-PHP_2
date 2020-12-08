<?php
require 'PriceProduct.php';
require 'DigitalProduct.php';
require 'WeighProduct.php';
abstract class Product
{
    protected string $name;
    protected float $price;
    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
}
    abstract public function getFinalCost():float; //абстрактный метод расчета стоимости
}
$price = 150;
    $products = [
        new PriceProduct('price', $price, 5),
        new DigitalProduct('name', $price),
        new WeighProduct('weight', 400, 1.5),
        ];
    foreach ($products as $product){
        echo 'Стоимость'. $product-> getFinalCost(),"\n";
}
