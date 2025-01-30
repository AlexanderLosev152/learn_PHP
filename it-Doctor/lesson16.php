<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 17' ?> </title>
</head>

<body>
	<?php
	echo 4 ** 2;
	echo '<br>';
	echo 8 % 3;
	echo '<br>';

	if (8 % 2)
		echo 'число не четное';
	else
		echo 'чило не четное';

	$num = 10;
	$var = 4;
	$num .= $var; // $num = $num . $var;
	$num += $var; // $num = $num + $var;
	$num -= $var; // $num = $num - $var;
	$num *= $var; // $num = $num * $var;
	$num /= $var; // $num = $num / $var;
	$num %= $var; // $num = $num % $var;
	$num **= $var; // $num = $num ** $var;
	
	?>
</body>

</html>