<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 12' ?> </title>
</head>

<body>
	<?php
	require './lesson12-class.php';
	// echo Point::$num;
	
	// $first = $second = 2;
	// $first = 3;
	// echo "$first - $second";
	
	$first = 5;
	$second = &$first;
	$second = 3;


	$first = new Point;
	$first->x = 3;
	$first->y = 3;

	$second = $first;
	$second->x = 5;
	$second->y = 5;

	echo "x : $first->x, y : $first->y";
	?>
</body>

</html>