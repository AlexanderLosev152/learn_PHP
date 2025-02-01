<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 40' ?> </title>
</head>

<body>
	<?php
	// function recurcia($counter)
	// {
	// 	if ($counter > 0) {
	// 		echo ($counter--) . '<br>';
	// 		recurcia($counter);
	// 	} else
	// 		return;
	// }
	
	// recurcia(10);
	
	function outher()
	{
		function inner()
		{
			return 'Hello';
		}
	}
	outher();
	echo inner();

	?>
</body>

</html>