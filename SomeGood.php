<?php

abstract class Good
{
    private $price = 400;

    public function getPrice()
    {
        return $this->price;
    }

    function __construct($price){
        $this->price = $price;
        $this->PriceGood();
    }

    abstract function PriceGood();
}

class DigitalGoods extends Good
{

    function PriceGood($price)
    {
        echo "$price<br>";
    }
}

$digitalGoods = new DigitalGoods();
$digitalGoods->PriceGood();

class PhysicalItem extends DigitalGoods
{
    function PriceGood($price)
    {
        echo $price / 2;
    }
}

$physicalItem = new PhysicalItem();
$physicalItem->PriceGood(400);

class GoodsByWeight
{

}
