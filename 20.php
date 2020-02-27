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
        return "{$this->name}"." Цена: "."{$this->price}<br>";
    }
}

$pepper = new Ingredient('Перец', 21);
echo $pepper->getInfo();
$carrot = new Ingredient('Морковь', 33);
echo $carrot->getInfo();
$garlic = new Ingredient('Чеснок', 12);
echo $garlic->getInfo();
$meat = new Ingredient('Мясо', 56);
echo $meat->getInfo();