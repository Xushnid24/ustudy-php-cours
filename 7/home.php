<?php

//1
function factorial($n){
    if($n < 0){
        return "ошибка";
    }
    if($n === 0){
        return 1;
    }
    $res = 1;
    for($i = 1; $i < $n; $i++){
        $res *= $i;
    }
    return $res;
}
echo factorial(6);

echo "<br>";
echo "<br>";

//2
function isPalindrome($string){
    if($string === $string){
        return true;
    }
    else{
        return false;
    }
}
echo isPalindrome("казак");

echo "<br>";
echo "<br>";

//3

function gcd($a, $b){//48 18
    while ($b != 0){ // 18 true
        $t = $b; //18 = t
        $b = $a % $b; // t = 48 % 18  = 12 => 18 % 12 = 6
        $a = $t;
    }
    return $a;
}
echo gcd(48,18);

echo "<br>";
echo "<br>";

//5
function celsiusToFahrenheit($celsius){
   return $celsius * 9 / 5 + 32;  
}

echo celsiusToFahrenheit(41);

echo "<br>";
echo "<br>";

//6
function countVowels($string){
    $alp = ['a', 'e', 'i', 'o', 'u', 'A', 'E',  ];
}
