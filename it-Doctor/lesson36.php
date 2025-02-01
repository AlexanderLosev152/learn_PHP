<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 36' ?> </title>
</head>

<body>
	<?php
	// $arr = ['red', 'green', 'blue', 'yellow', 'orange', 'purple', 'black', 'white', 'pink', 'brown'];
	// echo $arr[rand(0, count($arr) - 1)];
	
	// $length = rand(5, 10);
	// $arr = [];
	// for ($i = 0; $i < $length; $i++) {
	// 	$arr[$i] = rand(0, 100);
	// }
	// echo '<pre>';
	// print_r($arr);
	// echo '</pre>';
	

	$arr = file('./month.txt');
	echo '<pre>';
	print_r($arr);
	echo '</pre>';

	?>
</body>

</html>