<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 33' ?> </title>
</head>

<body>
	<?php
	$numbers = [1, 2, 3];
	for ($i = 0; $i < count($numbers); $i++) {
		echo "$numbers[$i] <br>";
	}

	echo '<br>';
	foreach ($numbers as $number) {
		echo "$number <br>";
	}
	?>
</body>

</html>