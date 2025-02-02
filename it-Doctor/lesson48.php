<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 48' ?> </title>
</head>

<body>
	<form action="GET" action="">
		<input type="text" name="first"><br>
		<input type="text" name="second"><br>
		<button type="submit">Отправить</button>
	</form>
	<?php
	if (empty($_GET['first']) && empty($_GET['second'])) {
		exit('Текстовые поля не заполнены ');
	} else {
		echo '<pre>';
		print_r($_GET);
		echo '</pre>';
	}
	?>

</body>

</html>