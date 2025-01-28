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

$b ? print "true" : print "false";