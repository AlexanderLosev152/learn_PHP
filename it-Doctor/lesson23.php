<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 23' ?> </title>
</head>

<body>
	<?php
	$homepage = file_get_contents('text.txt');
	$homepage .= "\nHello, World!";
	file_put_contents('text2.txt', $homepage);
	?>
</body>

</html>