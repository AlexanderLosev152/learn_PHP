<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 38' ?> </title>
</head>

<body>
	<?php
	function myFunc(int $a, int $b): int
	{
		$sum = $a + $b;
		return $sum;
	}
	echo myFunc(10, 2);
	echo '<br>';
	echo myFunc(12, 2);
	echo '<br>';
	echo myFunc(120, 22);

	echo '<br>';
	function sumNumbers(...$items)
	{
		foreach ($items as $item) {
			$sum = $item * $item;
			echo "$sum <br>";
		}
	}

	sumNumbers(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
	?>
</body>

</html>