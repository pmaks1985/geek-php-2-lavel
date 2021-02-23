<?php
abstract class Good {
    private $price;

    public function getPrice()
    {
        return $this->price;
    }

    abstract function PriceGood();
}

class DigitalGoods extends Good{

    function PriceGood($price) {
        echo $price;
    }
}
$digitalGoods = new DigitalGoods();
$digitalGoods->PriceGood();

class PhysicalItem extends DigitalGoods {

}

class GoodsByWeight {

}
