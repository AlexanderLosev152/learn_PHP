<?php
echo "hello world !!! <br>";

$userName = 'Alex';
$count = 17;
$count = 17.5;
$team = ['Marry', 'John', 'Sam'];
echo $team[2];
$oxo = [
	['x', '', 'o'],
	['o', 'o', 'x'],
	['x', 'o', '']
];
echo '<br>';
echo $oxo[2][0];
echo '<br>';
echo 6 + 2;
echo '<br>';
$count += 1;
$count = $count + 1;

$x = 10;
$y = 10;
if (++$x === 10)
	echo $x;
if ($y-- === 0)
	echo $y;

$text = "loresdfcsdgfsDgfSDgSDgfSD
sdfsdfsdfsdfsdfsdf
dsfsdfsdfs";


$b = null;
$b ? print "true" : print "false";

// function longdate($timestamp)
// {
// 	$temp = date("l F jS Y", $timestamp);
// 	return "Дата : $temp";
// }

function test()
{
	static $count = 0;
	echo $count;
	$count++;
}

test();

echo "<br>";

// $case_from = $_SERVER['HTTP_REFERER'];
$case_from = htmlentities($_SERVER['HTTP_REFERER']);
