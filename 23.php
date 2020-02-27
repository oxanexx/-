<?php

require_once '22.php';
use Ingredient\Entree;
use Ingredient\Ingredient;


$meat = new Ingredient('Мясо', array('Белок', 'Жир'), 22);
print_r($meat);

$milk = new Ingredient('Молоко', array('Белок', 'Жир'), 13);
print_r($milk);

$a = Entree::$ingredientsPrice;
print "Общая стоимость: {$a}";