<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 34' ?> </title>
</head>

<body>
	<?php
	$first = ['red', 'blue'];
	$second = ['brown', 'green'];
	// array_merge - объединяет один или более массивов
	$con = array_merge($first, $second);

	echo '<pre>';
	print_r($con);
	echo '</pre>';
	?>
</body>

</html>