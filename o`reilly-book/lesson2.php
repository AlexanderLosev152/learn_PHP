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


$page = "About";

if ($page == "Home") {
	echo "Вы выбрали домашнюю страницу <br>";
} elseif ($page == "About") {
	echo "Вы выбрали страницу о нас <br>";
} elseif ($page == "News") {
	echo "Вы выбрали страницу новостей <br>";
} elseif ($page == "Login") {
	echo "Вы выбрали страницу входа <br>";
} else {
	echo "Неизвестная страница <br>";
}

switch ($page) {
	case "Home":
		echo "Вы выбрали домашнюю страницу <br>";
		break;
	case "About":
		echo "Вы выбрали страницу о нас <br>";
		break;
	case "News":
		echo "Вы выбрали страницу новостей <br>";
		break;
	case "Login":
		echo "Вы выбрали страницу входа <br>";
		break;
	case "default":
		echo "Неизвестная страница <br>";
		break;
}

$fuel = 10;
echo $fuel <= 1 ? "Требуется дозаправка <br>" : "Топлива еше домтаточно <br>";

$fuel = 10;
while ($fuel > 1) {
	echo "#";
	$fuel++;
}

echo "<br>";
for ($i = 1; $i <= 10; $i++) {
	echo "# ";
}

$fp = fopen("text.txt", "wb");
for ($j = 0; $j < 100; ++$j) {
	$writen = fwrite($fp, "data");
	if ($writen === false)
		break;
}
fclose($fp);