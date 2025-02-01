<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= 'урок 43' ?> </title>
</head>

<body>
	<?php
	$str = "teext\nhello\nworld";
	echo $str;
	echo "<br>";
	echo nl2br($str);
	?>

	<form action="./lesson43.php" method="post">
		<textarea name="text" id="" cols="30" rows="10"></textarea>
		<input type="submit" value="Отправить">
	</form>

	<?php
	echo htmlspecialchars($_POST['text']);
	?>

</body>

</html>