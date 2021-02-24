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
        echo "Цена цифрового товара: " . self::PRICE . "<br>";
    }

    function GetIncome()
    {
        echo "Чистая прибыль от продажи цифрового товара: " . self::PRICE * $this->revenueFromSales . "<br>";
    }
}

$dg = new DigitalGoods;
$dg->PriceGood();
$dg->getIncome();

class PhysicalItem extends DigitalGoods
{
    function PriceGood()
    {
        echo "Цена физического товара: " . parent::PRICE / 2 . "<br>";
    }

    public function GetIncome()
    {
        echo "Чистая прибыль от продажи физического товара: " . parent::PRICE / 2 * parent::getRevenueFromSales() . "<br>";
    }
}

$pi = new PhysicalItem;
$pi->PriceGood();
$pi->GetIncome();


class GoodsByWeight extends Good
{
    private $weight = 2;
    private $price = 24;
    private $revenueFromSales = 0.90; //10% расходы

    public function getPrice()
    {
        return $this->price;
    }


    public function getWeight()
    {
        return $this->weight;
    }

    public function getRevenueFromSales()
    {
        return $this->revenueFromSales;
    }

    function PriceGood()
    {
        echo "Цена товара на вес: " . $this->getWeight() * $this->getPrice() . "<br>";
    }

    function GetIncome()
    {
        echo "Чистая прибыль от продажи товара на вес: " . $this->getPrice() * $this->getWeight() * $this->getRevenueFromSales() . "<br>";
    }
}

$gbw = new GoodsByWeight;
$gbw->PriceGood();
$gbw->GetIncome();
