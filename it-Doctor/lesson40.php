<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 40' ?> </title>
</head>

<body>
	<?php
	// $message = 'Hello, World!';
	// $mFu = function () use ($message) {
	// 	echo $message;
	// };
	// $mFu();
	
	// function odd(int $number)
	// {
	// 	if ($number % 2 === 0) {
	// 		return false;
	// 	} else {
	// 		return true;
	// 	}
	// }
	// echo odd(4);
	
	function sum(...$items)
	{
		$sum = 0;
		for ($i = 0; $i < count($items); $i++) {
			$sum += $items[$i];
		}
		return $sum;
	}

	echo sum(3, 4, 6);
	?>
</body>

</html>