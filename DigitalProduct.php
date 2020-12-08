<?php
class DigitalProduct extends Product{
    public function  __construct($name, $price){
        parent:: __construct($name, $price/2);
    }
    public function getFinalCost(): float{
        return $this->price;
    }
}