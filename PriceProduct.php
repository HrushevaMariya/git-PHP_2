<?php
class PriceProduct extends Product
{
    protected int $count;
    public function getFinalCost(): float{
       return $this->price * $this->count;
    }
    public function __construct($name, $price, $count){
      parent:: __construct($name, $price);
      $this->count = $count;
    }
}

