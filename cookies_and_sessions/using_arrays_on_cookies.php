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
	/*

	*/
	$lifetime 	=	time() + (60*5);

	setcookie("User[Name]", "Mehmet", $lifetime); 		// Creates an array called "User" then creates that indexes : Username , Surname , Phone
	setcookie("User[Surname]", "Geylani", $lifetime);
	setcookie("User[Phone]", "0542139870", $lifetime);
	
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";

	?>
</body>
</html>	