<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 7' ?> </title>
</head>

<body>
	<?php
	$var = '!!!';
	$str = 'Hello world !!!';
	$str = `Hello world !!!`;
	$str = "Hello world $var"; // в двойных кавычках можено подставлять перменные
	echo $str;
	?>
</body>

</html>