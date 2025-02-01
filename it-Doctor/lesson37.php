<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 37' ?> </title>
</head>

<body>
	<?php
	function myFunc($a, $b)
	{
		$sum = $a + $b;
		return $sum;
	}
	echo myFunc(10, 2);
	echo '<br>';
	echo myFunc(12, 2);
	echo '<br>';
	echo myFunc(120, 22);

	?>
</body>

</html>