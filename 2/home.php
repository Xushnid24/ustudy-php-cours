<?php

define('PI', 3.14159);

   function calculateCircleArea($radius) {
       $s = PI * ($radius * $radius); ///
       echo $s;
   }
   echo calculateCircleArea(5);

echo "<br>";
echo "<br>";


$name = "Xyшнид";
$age = "18";
echo "Меня зовут ". $name .", мне". $age ."лет, и я програмист";


echo "<br>";
echo "<br>";

function calculate($a , $b){
    echo "сумма= ". $a + $b . "<br>";
    echo "разность= ". $a - $b . "<br>";
    echo "произведение= ". $a * $b . "<br>";
    echo "частное= ". $a / $b . "<br>";
}
echo calculate(10,5);

define('LENGTH', 10);
define('WIDTH', 5);
function calculateRectangle() {
    $S = LENGTH * WIDTH;
    $P = 2 * (LENGTH + WIDTH);
    echo 'Площадь: '. $S .' Периметр '. $P;
}
echo calculateRectangle();

echo "<br>";
echo "<br>";

function mathOperations($a2, $b2) {
    echo "Сумма чисел $a2 и $b2 = ".  $a2+$b2. "<br>";
    echo "Разность чисел $a2 и $b2 = ". $a2-$b2. "<br>";
    echo "Произведение чисел $a2 и $b2 = ".  $a2*$b2. "<br>";
    echo "Частное чисел $a2 и $b2 = ".  $a2/$b2. "<br>";
}
echo mathOperations(5,4);

