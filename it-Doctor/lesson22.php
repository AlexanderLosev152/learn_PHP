<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 22' ?> </title>
</head>

<body>
	<?php
	echo date('l');
	echo '<br>';
	switch (date('l')) {
		case 'Monday':
			echo 'Today is Monday';
			break;
		case 'Tuesday':
			echo 'Today is Tuesday';
			break;
		case 'Wednesday':
			echo 'Today is Wednesday';
			break;
		case 'Thursday':
			echo 'Today is Thursday';
			break;
		case 'Friday':
			echo 'Today is Friday';
			break;
		case 'Saturday':
			echo 'Today is Saturday';
			break;
		case 'Sunday':
			echo 'Today is Sunday';
			break;
		default:
			echo 'Invalid day';
			break;
	}

	echo '<br>';
	$number = 120;
	if ($number > 0 && $number < 10) {
		echo 'Number is between 0 and 10';
	} elseif ($number > 100 && $number < 200) {
		echo 'Number is between 100 and 200';
	} elseif ($number > 200 && $number < 300) {
		echo 'Number is between 200 and 300';
	} else {
		echo 'Number is not between 0 and 300';
	}

	echo '<br>';

	switch ($number) {
		case $number > 0 && $number < 10:
			echo 'Number is between 0 and 10';
			break;
		case $number > 100 && $number < 200:
			echo 'Number is between 100 and 200';
			break;
		case $number > 200 && $number < 300:
			echo 'Number is between 200 and 300';
			break;
		default:
			echo 'Number is not between 0 and 300';
			break;
	}

	?>
</body>

</html>