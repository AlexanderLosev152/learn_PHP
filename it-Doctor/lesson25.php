<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 25' ?> </title>
</head>

<body>
	<?php
	$count = 1;
	while ($count < 11) {
		echo "$count <br>";
		$count++;
	}

	for ($count = 1; $count < 11; $count++) {
		echo "$count <br>";
	}
	?>


</body>

</html>