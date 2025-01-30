<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 20' ?> </title>
</head>

<body>
	<?php
	if (true) {
		echo 'правда';
	} else {
		echo 'ложь';
	}

	echo '<br>';

	$char = 'php';
	if ($char === 'php') {
		echo "php";
	} elseif ($char === 'js') {
		echo "js";
	} elseif ($char === 'c#') {
		echo "c#";
	} else {
		echo "неизвестный язык";
	}

	?>
</body>

</html>