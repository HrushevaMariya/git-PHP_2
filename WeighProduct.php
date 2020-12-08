<?php
class WeighProduct extends Product
{
    protected float $weight;
    public function __construct($name, $price, $weight){
        parent:: __construct($name, $price);
        $this->weight = $weight;
    }
    public function getFinalCost(): float{
        return $this-> price * $this-> weight;
    }
}
