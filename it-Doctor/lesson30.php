<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 30' ?> </title>
</head>

<body>
	<?php
	$transports = [
		"Авто" => ['Лада', 'Bmw', 'Mersedes'],
		"Деревья" => ['Береза', 'Дуб', 'Сосна'],
	];
	echo '<pre>';
	print_r($transports);
	echo '<pre>';

	echo '<br>';
	echo $transports['Авто']['2'];

	?>
</body>

</html>