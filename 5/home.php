<?php

// Циклы

//1
//$sum = 0;
//for ($i = 0; $i <= 100; $i++) {
//    $sum += $i;
//}
//echo $sum;
//
//echo "<br>";
//echo "<br>";

//2
//$num = 7;
//for ($i = 1; $i <= 10; $i++){
//   echo "$num * $i = ". $num*$i. "<br>"; 
//}
// 
//echo "<br>";
//echo "<br>";

//3
//$member = [8, -4 ,7 ,9 ,10];
//$min = $member[0];
//foreach ($member as $key){
//    if($key < $min){
//        $min = $key;
//    }
//}
//echo $min;
//
//echo "<br>";
//echo "<br>";

//4
//$a = 5;
//$i2 = 1;
//$fac = 1;
//while ($i2 <= $a){
//    $fac*=$i2;
//    $i2++;
//}
//echo $fac;
//
//echo "<br>";
//echo "<br>";

//5
//$sum = 1;
//for ($i = 1; $i <= 50; $i++){
//    if($i % 2 == 0){
//        $sum += $i;
//    }
//}
//echo $sum;

//echo "<br>";
//echo "<br>";

//6
//$i = 10;
//do {
//    echo "$i ";
//    $i--;
//} while ($i > 0);

//echo "<br>";
//echo "<br>";

//7
//$num = [0,-2,-5,7];
//foreach ($num as $k => $v) {
//    if($v <0){
//        echo $v;
//        break;
//    }
//}
//
//echo "<br>";
//echo "<br>";

//8
//for ($i = 1; $i <= 20; $i+=2) {
//    echo $i. "<br>";
//}
//
//echo "<br>";
//echo "<br>";

//9
//$string = "php";
//for ($i = 0; $i < strlen($string); $i++) {
//    echo $string[$i] ." ";
//}
//
//echo "<br>";
//echo "<br>";

//10
//$num =[9,4,7,-2,5];
//$pos = 0;
//$neg = 0;
//foreach ($num as $v) {
//    if($v > 0){
//        $pos ++;
//    }
//    else if($v < 0){
//        $neg ++;
//    }
//}
//echo $pos. " ";
//echo $neg. " ";
//
//echo "<br>";
//echo "<br>";

//11
//$num = 2;
//while ($num <= 10) {
//    echo $num. " ";
//    $num+=2;
//}
//
//echo "<br>";
//echo "<br>";

//12
//$number = 7;
//$isPrime = true;
//for ($i = 2; $i <= sqrt($number); $i++) {
//    if ($number % $i == 0) {
//        $isPrime = false;
//        break;
//    }
//}
//echo $isPrime ? "$number простое" : "$number составное";

//echo "<br>";
//echo "<br>";

//13
//$a = 0;
//$b = 1;
//for ($i = 0; $i < 10; $i++) {
//    echo $a . "<br>";
//    $temp = $a + $b;
//    $a = $b;
//    $b = $temp;
//}

//14
//$target = 10;
//$sum = 0;
//$i = 1;
//do {
//    $sum += $i;
//    $i++;
//} while ($i <= $target);
//echo "Сумма чисел до $target: $sum";

//15
//$numbers = [1, 2, 3, 4, 5];
//foreach ($numbers as &$num) {
//    $num = ($num % 2 == 0) ? $num * 2 : $num - 1;
//}
//print_r($numbers);

//инкримент дискримент 
//1
//$a = 0;
//$number = 0;
//while ($a < 10) {
//    $number++;
//    $a++;
//}
//echo "Количество $number";

//2
//for ($i = 2; $i <= 20; $i+=2) {
//    echo "$i ";
//}

//3
//for ($i = 10; $i >= 0; $i--) {
//    echo "$i ";
//}

//4
//$a = 10;
//$b = 2;
//while ($b <= $a) {
//    $b*=2;
//}
//echo "Итог $b";

//5
//for ($i = 20; $i >= 0; $i -= 2) {
//    echo $i . "<br>";
//}


//Тернарные операторы
//1
//$a = 7;
//$b = ($a % 2 == 0) ? "true":"false";
//echo $b;

//2
//$a = 18;
//$b = ($a >= 18) ? "Совершенолетний":"Несовершенолетний";
//echo $b;

//3
//$w = "xushnid";
//$res = (strlen($w) < 10) ? "Короткая":"Длинная";
//echo $res;

//4
//$clock = 10;
//$res = ($clock >=6 && $clock <= 18) ? "День":"Ночь";
//echo $res;

//5
//$password = "xushnid2006";
//$password2 = "Xushnid2006";
//$check = ($password == $password2)? "Доступ разрешен" : "Неверный пароль";
//echo $check;

