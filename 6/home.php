<?php

//1
$num = [1,2,3,4,5];
foreach ($num as  $v) {
    echo "$v ";
}

echo "<br>";
echo "<br>";

//2
$day = [
    "Monday" => 1,
    "Tuesday" => 2,
    "Wednesday"=> 3,
    "Thursday"=> 4,
    "Friday "=> 5,
    "Saturday"=> 6,
    "Sunday"=> 7,
];
echo $day["Wednesday"];

echo "<br>";
echo "<br>";

//3
$workers = [
    ["name" => "Alice", "age" => "20", "position" => "it programmer"],
    ["name" => "Jon", "age" => "22", "position" => "designer"],
    ["name" => "Jason", "age" => "19", "position" => "artist"]
];
foreach ($workers as $worker) {
    echo "{$worker['name']}, {$worker['age']}, {$worker['position']}\n";
}

echo "<br>";
echo "<br>";

//4
$numberR = [1,0,4,7,6,2];
sort($numberR);
print_r($numberR);

echo "<br>";
echo "<br>";

//5
$products = [
    "Фрукты" => ["яблоко", "банан", "апельсин"],
    "Овощи" => ["картофель", "морковь", "лук"],
    "Мясо" => ["курица", "говядина", "свинина"],
];
print_r($products);

echo "<br>";
echo "<br>";

//6
$students = [
    ["name" => "Anna", "math" => 90, "english" => 85],
    ["name" => "Tom", "math" => 78, "english" => 92],
    ["name" => "Sam", "math" => 88, "english" => 84],
];
$totalMath = $totalEnglish = 0;
foreach ($students as $student) {
$totalEnglish += $student['math'];
$totalMath += $student['english'];
}
echo "average math = ". $totalMath/count($students) . "\n";
echo "average english = ". $totalEnglish / count($students). "\n";

echo "<br>";
echo "<br>";

//7
$fruit = ["apple", "orange", "lemon"];
echo implode(", ", $fruit);

echo "<br>";
echo "<br>";

//8
$fixedNumber = new SplFixedArray(5);
for ($i = 0; $i < $fixedNumber -> getSize(); $i++) {
    $fixedNumber[$i] = rand(0,100);
}
print_r($fixedNumber);

echo "<br>";
echo "<br>";

//9
$countries = ["France" => "Paris", "Spain" => "Madrid", "Italy" => "Rome"];
function getCapital($country) {
    global $countries;
    return $countries[$country] ?? "Неизвестная страна";
}
echo getCapital("France");

echo "<br>";
echo "<br>";

//10
$chessBoard = [
    ["R", "N", "B", "Q", "K", "B", "N", "R"],
    ["P", "P", "P", "P", "P", "P", "P", "P"],
    ["", "", "", "", "", "", "", ""],
    ["", "", "", "", "", "", "", ""],
    ["", "", "", "", "", "", "", ""],
    ["", "", "", "", "", "", "", ""],
    ["p", "p", "p", "p", "p", "p", "p", "p"],
    ["r", "n", "b", "q", "k", "b", "n", "r"],
];
foreach ($chessBoard as $row) {
    echo implode(" ", $row) . "\n";
}

echo "<br>";
echo "<br>";

//11
$scores = ["Alice" => 90, "Bob" => 85, "Charlie" => 95];
$highestScore = max($scores);
$topStudent = array_search($highestScore, $scores);
echo "Top Student: $topStudent with $highestScore points.";

echo "<br>";
echo "<br>";

//12
$names = ["Anna", "Tom", "Sam", "Alice"];
sort($names);
print_r($names);

echo "<br>";
echo "<br>";

//13
$vacations = [
    "Alice" => ["2024-07-01", "2024-12-15"],
    "Bob" => ["2024-08-10", "2024-11-01"],
];
print_r($vacations);

echo "<br>";
echo "<br>";

//14
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$evenNumbers = array_filter($numbers, fn($num) => $num % 2 === 0);
print_r($evenNumbers);

echo "<br>";
echo "<br>";

//15
$months = ["January" => 31, "February" => 28, "March" => 31];
echo "Days in February: " . $months["February"];

echo "<br>";
echo "<br>";

//16
$schedule = [
    "Понедельник" => ["9:00" => "Математика", "11:00" => "Физика"],
    "Вторник" => ["10:00" => "Химия", "13:00" => "История"],
];
print_r($schedule["Понедельник"]);

echo "<br>";
echo "<br>";

//17
$nums = [1, 2, 3, 4, 5];
echo "Sum: " . array_sum($nums);

echo "<br>";
echo "<br>";

//18
$books = [
    ["title" => "Book A", "author" => "Author A", "year" => 1999],
    ["title" => "Book B", "author" => "Author B", "year" => 2005],
    ["title" => "Book C", "author" => "Author C", "year" => 2015],
];
function findBooksAfter($year) {
    global $books;
    return array_filter($books, fn($book) => $book["year"] > $year);
}
print_r(findBooksAfter(2000));

echo "<br>";
echo "<br>";

//19
$teams = [
    ["team" => "Team A", "country" => "Country A", "players" => ["Alice", "Bob"]],
    ["team" => "Team B", "country" => "Country B", "players" => ["Charlie", "David"]],
];
foreach ($teams as $team) {
    echo "{$team['team']} ({$team['country']}): " . implode(", ", $team["players"]) . "\n";
}

echo "<br>";
echo "<br>";


//20
$values = [1, 2, 2, 3, 4, 4, 5];
$uniqueValues = array_unique($values);
print_r($uniqueValues);

