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

echo "Общий счет = {$expense};";
echo " НДС = {$nds};";
echo " Чаевые = {$gratuity};";
echo " Итого = {$total}";