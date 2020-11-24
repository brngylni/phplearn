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
	$name 	=	$_COOKIE["Username"];
	$surname 	=	$_COOKIE["Surname"];

	echo "Hello " . $name . " " . $surname . " .How are you?";

	?>

	<a href="form.php">Turn back to form</a>
</body>
</html>