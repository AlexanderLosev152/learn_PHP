<?php
// echo "a : [" . TRUE . "]<br>";
// echo "b : [" . FALSE . "]<br>";
// echo "a : [" . (20 > 9) . "]<br>";
// echo "b : [" . (5 === 6) . "]<br>";
// echo "c : [" . (1 === 0) . "]<br>";
// echo "d : [" . (1 === 1) . "]<br>";

$myName = "Alex";
$myAge = "38";

echo "a :$myAge <br>";
echo "b : Hello <br>";
echo "c : FALSE <br>";
echo "d : $myName <br>";


$days_to_new_year = 2;
if ($days_to_new_year < 30) {
	echo "Скоро новый год! <br>";
}

// множественное присваивание
$level = $score = $time = 10;
echo "$level<br>";
echo "$score<br>";
echo "$time<br>";

$month = 'Март';
if ($month == 'Март') {
	echo "Это месяц март <br>";
}
