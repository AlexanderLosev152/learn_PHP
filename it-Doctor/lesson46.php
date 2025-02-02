<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 46' ?> </title>
</head>

<body>
	<?php
	$arr = [
		'name' => 'Petr',
		'phones' => [
			'888',
			'777',
		],
	];
	$secondeArr = json_encode($arr);
	echo $secondeArr;
	echo '<pre>';
	print_r(json_decode($secondeArr, true));
	echo '</pre>';
	?>

</body>

</html>