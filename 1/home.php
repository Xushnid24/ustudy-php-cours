<?php

//1
$name = "Хушнид";
$age = 18;
$country = "Узбекистан";//


echo "Меня зовут $name , мне $age лет, я живу в $country <br>";

//2//
$productName = "кола";
$quantity = 7;
$price = 4.3;
$inStock = true;

echo gettype($productName). "\n";
echo gettype($quantity). "\n";
echo gettype($price). "\n";
echo gettype($inStock). "\n <br>";


//3
$n = 123.45;
$intn =(int)$n;
$floatn=(float)$n;
echo "Целое число: $intn \n";
echo "смешаное число $floatn \n <br>";

//4
$intk = 5;
$floatk = 2.5;
echo "Сложение:". ($intk + $floatk) . "\n";
echo "Вычитание:". ($intk - $floatk). "\n";
echo "Умножение:". ($intk * $floatk) . "\n";
echo "Деление:". ($intk / $floatk) . "\n <br>";

//5
$num = true;
if(is_int($num)){
    echo "$num - целое число. \n";
}
else if(is_string($num)){
    echo "$num - строка. \n";
}
else if(is_bool($num)){
    echo "$num - булевское значение. \n ";
}




