<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title></title>
</head>
<body>
	<?php
	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$lifetime = time() + ((60 * 60) * 24);

	setcookie("Username", $name, $lifetime);
	setcookie("Surname", $surname, $lifetime);


	?>
	<a href="who.php">Show the message</a>
</body>
</html>