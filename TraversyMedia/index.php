<?php

echo "hello world !!!";
print_r('hello');
var_dump('hello world !!!');

$name = 'Alex';
$age = 20;
$has_kids = true;

echo '<br>';
echo $name . ' is ' . $age . ' years old';
echo '<br>';
echo "$name is $age years old";
echo '<br>';
echo "{$name}is {$age} years old";
echo '<br>';

// создание констант
define('HOST', 'localhost');
echo HOST;
echo '<br>';

// arr

$nambers = ['1', '2', '3', '4', '5', '6'];
// $fruits = ['apple', 'orange', 'pear'];
echo $fruits[0];
echo '<br>';

$colors = [
	1 => 'red',
	2 => 'white',
	3 => 'blue',
	4 => 'yellow',
];
echo $colors[1];
echo '<br>';

$colors_2 = [
	'red' => '#000',
	'white' => '#0f0',
	'blue' => '#00f',
	'yellow' => '#f00',
];
echo $colors_2['red'];
echo '<br>';

$people = [
	[
		'first_name' => 'Alexander',
		'last_name' => 'Losev',
		'mail' => 'Losev.pavlovo@mail.ru',
	],
	[
		'first_name' => 'John',
		'last_name' => 'Doe',
		'mail' => 'john@mail.ru',
	],
	[
		'first_name' => 'Jane',
		'last_name' => 'Traversy',
		'mail' => 'jane@mail.ru',
	],
];

echo $people[1]['mail'];
echo '<br>';

$age = 19;

if ($age >= 18) {
	echo 'you are old enough to vote';
} else {
	echo 'sorry, you are not old enough to vote';
}
echo '<br>';

$t = date("H");
echo $t;

echo "<br>";
$posts = ['First'];
if (!empty($posts)) {
	echo $posts[0];
} else {
	echo 'No post';
}

echo '<br>';
echo !empty($posts) ? $posts[0] : 'No post';
echo '<br>';

$favcolor = 'red';
switch ($favcolor) {
	case 'red':
		echo 'Your favorite color is red';
		break;
	case 'blue':
		echo 'Your favorite color is blue';
		break;
	case 'white':
		echo 'Your favorite color is white';
		break;
	default:
		echo 'Your no favorite color';
}

echo '<br>';

for ($i = 0; $i < 10; $i++) {
	echo $i;
}

echo '<br>';

$i = 0;
while ($i < 10) {
	echo $i;
	$i++;
}

echo '<br>';

$arr_numbers = ['1', '2', '3', '4', '5', '6', '7'];

for ($i = 0; $i < count($arr_numbers); $i++) {
	echo $arr_numbers[$i];
}
echo '<br>';
foreach ($arr_numbers as $number) {
	echo $number;
}

echo '<br>';

function registerUser($mail)
{
	echo "{$mail} registred <br>";
}

registerUser('losev');


function sum($a, $b)
{
	return $a + $b;
}
echo sum(10, 3);
echo '<br>';

$subtract = fn($a, $b) => $a - $b;
echo $subtract(10, 3);
echo '<br>';

$fruits = ['apple', 'orange', 'pear'];
echo count($fruits); // узнать длину массива
$fruits[] = 'grape';

array_push($fruits, 'mango'); // добавить в конец массива
array_unshift($fruits, 'bananas'); // добавить в начало массива

array_pop($fruits); // удалить из конца массива
array_shift($fruits); // удалить из начала массива
// unset($fruits[2]); // удалить определеннй элемент массива

// $chunc = array_chunk($fruits, 2); // поделить масиив на несколько массивов

echo '<pre>';
print_r($fruits);
echo '</pre>';

// echo '<pre>';
// print_r($chunc);
// echo '</pre>';

$arr1 = [1, 2, 3, 4];
$arr2 = [5, 6, 7];
$arr3 = array_merge($arr1, $arr2); //обьединение массивов
$arr4 = [...$arr1, ...$arr2]; // тоже обьединение массивов(через спред оператор)
echo '<pre>';
print_r($arr3);
echo '</pre>';

$q = ['green', 'red', 'yelow'];
$w = ['avocado', 'apple', 'banana'];

$e = array_combine($w, $q); // сделать элементы первого массива ключами второго массива

echo '<pre>';
print_r($e);
echo '</pre>';

// [avocado] => green
// [apple] => red
// [banana] => yelow

// $keys = array_keys($e);

// echo '<pre>';
// print_r($keys);
// echo '</pre>';

$numbers = range(1, 100);

$newNuimbers = array_map(function ($number) {
	return "Number $number";
}, $numbers);

// $lessThan10 = array_filter($numbers, fn($number) => $number <= 10 === 0);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);


$string = 'Hello world !!!';
echo strlen($string); // strlen — Получает длину строки
echo '<br>';
echo strpos($string, 'H'); // strpos — Находит позицию первого вхождения подстроки
echo '<br>';

$hex = bin2hex('Hello world!');

var_dump($hex);