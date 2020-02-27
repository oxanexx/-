<?php

Class Ingredient {
    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    function getInfo() {
        return "{$this->name}"." Цена: "."{$this->price}  ";
    }
    function sale($a) {
        $this->price = $a;
        return "(Цена со скидкой "."= {$a})<br>";
    }
}

$pepper = new Ingredient('Перец', 21);
echo $pepper->getInfo();
echo $pepper->sale(2);

$carrot = new Ingredient('Морковь', 33);
echo $carrot->getInfo();
echo $carrot->sale(3);

$garlic = new Ingredient('Чеснок', 12);
echo $garlic->getInfo();
echo $garlic->sale(1);

$meat = new Ingredient('Мясо', 56);
echo $meat->getInfo();
echo $meat->sale(5);