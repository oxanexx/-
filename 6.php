<?php
// задание 1
print 'How are you?a';
print "I'm fine.";


// задание 2
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


# задание 3


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



// задание 4
$first_name = "Artem";
$last_name = "Alexandrovskiy";

$full_name = $first_name . " " . $last_name;

echo strlen($full_name);
echo $full_name;



// задание 5
$a = 2;
echo " а = {$a} \n";
++$a;
echo "++a = {$a} \n";
$a *= 5;
echo "a *= 5 = {$a} \n";
$a **= 2;
echo "a **= 2 = {$a} \n";

/*
Снабдите комментариями программы, написанные
на РНР в предыдущих упражнениях. Попробуйте ввести как одно-, так и
многострочные комментарии. После ввода комментариев выполните
программу, чтобы убедиться в правильности их функционирования и
синтаксиса введенных комментариев.
*/
