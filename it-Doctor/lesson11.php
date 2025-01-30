<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 11' ?> </title>
</head>

<body>
	<?php
	require './lesson11-class.php';
	$point1 = new Point;
	$point1->x = 13;
	$point1->y = 3;
	echo $point1->x;

	echo '<br>';

	$point2 = new Point;
	$point2->x = 213;
	$point2->y = 123;
	echo $point2->x;
	?>
</body>

</html>