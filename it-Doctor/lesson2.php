<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'Новая страница' ?> </title>
</head>

<body>
	<?php
	echo 'Текущая дата: ';
	echo date(DATE_RSS);
	?>
	<br>
	<?php
	if (mt_rand(0, 1)) {
		?>
		<div style="color:blue">Синий</div>
		<?php
	} else {
		?>
		<div style="color:red">Красный</div>
		<?php
	}
	?>
</body>

</html>