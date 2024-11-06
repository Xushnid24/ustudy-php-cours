<?php

//1
$age = 18;

if ($age < 18) {
    echo "Доступ запрещен";
}
elseif ($age <= 65) {
    echo "Доступ разрешен";
}
else {
    echo "Пользователь пожилой";
}

echo "<br>";
echo "<br>";


//2
$score = 90;

if ($score < 50) {
    echo "Неудовлетворительно";
}
elseif ($score <= 69) {
    echo "Удовлетворительно";
}
elseif ($score <= 89) {
    echo "Хорошо";
}
else {
    echo "Отлично";
}

echo "<br>";
echo "<br>";

//3
$num = 7;

if ($num % 2 == 0) {
    echo "Четное число";
}
else {
    echo "Нечетное число";
}

echo "<br>";
echo "<br>";

//4
$weekend = 7;

switch ($weekend) {
    case 1: echo "понедельник"; break;
    case 2: echo "вторник"; break;
    case 3: echo "среда"; break;
    case 4: echo "четверг"; break;
    case 5: echo "пятница"; break;
    case 6: echo "суббота"; break;
    case 7: echo "воскресенье"; break;
    default: echo "такого дни недели не существует";
}

echo "<br>";
echo "<br>";

//5
$number = 99;

if ($number >= 10 && $number <= 20) {
    echo "Число в диапазоне";
}
else {
    echo "Число вне диапазона";
}

echo "<br>";
echo "<br>";

//6 ----
$password = "xushnid123";
if (strlen($password) > 8 && preg_match('/\d/', $password)) {
    echo "Пароль принят";
}
else {
    echo "Пароль не соответствует требованиям";
}

echo "<br>";
echo "<br>";

//7
$a = 3;
$b = 3;

if ($a > $b) {
    echo "Первое число больше";
}
elseif ($a < $b) {

    echo "Второе число больше";
}
else {
    echo "Числа равны";
}

echo "<br>";
echo "<br>";

//8
$month = 5;

if ($month >= 1 && $month <= 3) {
    echo "Зима";
}
elseif ($month >= 4 && $month <= 6) {

    echo "Весна";
}
elseif ($month >= 7 && $month <= 9) {

    echo "Лето";
}
elseif ($month >= 10 && $month <= 12) {

    echo "Осень";
}
else {
    echo "Некорректный номер месяца";
}

echo "<br>";
echo "<br>";

//9
$word1 = "It";
$word2 = "it";

if ($word1 == $word2) {
    echo "Строки идентичны";
}
else {
    echo "Строки различаются";
}

echo "<br>";
echo "<br>";

//10
$login = "admin";
$passwordLog = "1234";

if ($login == "admin" && $passwordLog == "1234") {
    echo "Авторизация успешна";
}
else {
    echo "Неверный логин или пароль";
}

echo "<br>";
echo "<br>";

//11
$year = 2024;

if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "Год високосный";
}
else {
    echo "Год не високосный";
}

echo "<br>";
echo "<br>";

//12
$calcNum1 = 5;
$calcNum2 = 2;
$operation = "/";

switch ($operation) {
    case "+": echo $calcNum1 + $calcNum2; break;
    case "-": echo $calcNum1 - $calcNum2; break; 
    case "*": echo $calcNum1 * $calcNum2; break;
    case "/": echo $calcNum1 / $calcNum2; break;
}

echo "<br>";
echo "<br>";

//13
$ageWorker = 18;
$weekendWorker = 4;

if ($ageWorker >= 18 && $weekendWorker >= 1 && $weekendWorker <= 5) {
    echo "Рабочий день";
} else {
    echo "Выходной";
}

echo "<br>";
echo "<br>";

//14
$a14 = 6;
$b14 = 2;
$c14 = 9;

$min = $a14;
if ($b14 < $min) $min = $b14;
if ($c14 < $min) $min = $c14;

echo "Минимальное число: $min";

echo "<br>";
echo "<br>";

//15
$x = -3;
$y = 4;

if ($x > 0 && $y > 0) {
    echo "1-й";
}
elseif ($x < 0 && $y > 0) {
    echo "2-й";
}
elseif ($x < 0 && $y < 0) {
    echo "3-й";
}
elseif ($x > 0 && $y < 0) {
    echo "4-й";
}
elseif ($x == 0 && $y == 0) {
    echo "находится в нчале кординат";
}

