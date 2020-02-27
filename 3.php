<?php

$gumburger = 49.5;
$milkshake = 19.5;
$cola = 8.5;
$tax = 7.5;
$gratuity = 16;

$expense = $gumburger * 2 + $milkshake + $cola;
$nds = $expense * ($tax / 100);
$gratuity = $expense * ($gratuity / 100);
$total = $expense + $gratuity + $nds;
$expense_nds = $expense + $nds;
$expense_gratuity = $expense + $gratuity;
$gumburger *= 2;

echo "Гамбургер х 2 шт. = {$gumburger};\n";
echo "Молочно-шоколадный коктейль х 1 шт. = {$milkshake};\n";
echo "Кока-кола х 1 шт. = {$cola};\n";
echo "Общий счет без НДС = {$expense};\n";
echo "Общий счет с НДС = {$expense_nds};\n";
echo "Общий счет с чаевыми = {$expense_gratuity};\n";
echo "Итого = {$total}";
