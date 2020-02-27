<?php

namespace Ingredient;
Class Entree {

    public $name;
    public $ingredients = array();
    static $ingredientsPrice = 0;

    public function hasingredient ($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }

    public function __construct($name, $ingredients)
    {
        if (! is_array ( $ingredients) ) {
            throw new Exception('$ingredients must Ье an array ');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }
}


Class Ingredient extends Entree{
    public $price;


    public function __construct($name, $ingredients, $price)
    {
        parent::__construct($name, $ingredients);
        $this->price = $price;
        Entree::$ingredientsPrice += $this->price;
    }
}