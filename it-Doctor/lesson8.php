<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 8' ?> </title>
</head>

<body>
	<?php
	$user = 'Ivan';
	// isset - проверяет существует или переменная
	if (isset($user))
		echo "Переменная существует";
	else
		echo "Переменная не существует";

	echo '<br>';

	$str = 'ййй';
	// empty - проверят пустая ли переменная или нет
	if (empty($str))
		echo 'Строка путая';
	else
		echo 'В строке что то есть';

	echo '<br>';

	echo gettype($str); // проверяет какой тип памяти у переменной
	
	echo '<br>';

	// is_int - проверить число ли это
	if (is_int(1))
		echo 'это число';
	else
		echo 'это не число';
	?>
</body>

</html>