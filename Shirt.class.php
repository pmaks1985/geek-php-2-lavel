<?php

class Shirt
{
    public $color;
    public $size;
    public $material;

    function __construct($color,$size,$material) {
        $this->color = $color;
        $this->size = $size;
        $this->material = $material;

    }

    function show()
    {
        echo $this->color . " рубашка из " . $this->material . " имеет размер " . $this->size . "<hr>";
    }

}

$shirt = new Shirt('желтая','48-50', 'хлопок');
$myShirt = new Shirt('красная', '52-54', 'шелк');

$shirt->show();
$myShirt->show();

