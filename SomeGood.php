<?php

abstract class Good
{
    abstract function PriceGood(); //метод получения цены

    abstract function GetIncome(); //метод получения дохода
}

class DigitalGoods extends Good
{
    const PRICE = 400;
    private $revenueFromSales = 0.95; //5% расходы

    public function getRevenueFromSales()
    {
        return $this->revenueFromSales;
    }

    function PriceGood()
    {
        echo "Цена товара: " . self::PRICE . "<br>";
    }

    function GetIncome()
    {
        echo "Чистая прибыль: " . self::PRICE * $this->revenueFromSales . "<br>";
    }
}

$dg = new DigitalGoods;
$dg->PriceGood();
$dg->getIncome();

class PhysicalItem extends DigitalGoods
{
    function PriceGood()
    {
        echo parent::PRICE / 2 . "<br>";
    }
}

$pi = new PhysicalItem;
$pi->PriceGood();


class GoodsByWeight extends Good
{
    private $weight = 2;
    private $price = 24;

    public function getPrice()
    {
        return $this->price;
    }


    public function getWeight()
    {
        return $this->weight;
    }

    function PriceGood()
    {
        echo $this->weight * $this->price . "<br>";
    }
}

$gbw = new GoodsByWeight;
$gbw->PriceGood();
