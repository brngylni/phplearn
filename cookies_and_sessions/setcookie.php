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
	setcookie() 	: It is using to create or delete cookies.
	Parameters 	:	

	1. Cookie Name
	2. Cookie Value
	3. Cookie Lifetime
	*/

	$lifetime 	=	time() + (60 * 60);
	setcookie("Username", "Baran", $lifetime);
	setcookie("UsernSurname", "Geylani", $lifetime); // We can give 0 lifetime to delete a cookie.
	setcookie("School", "Adu", $lifetime);

	echo "<pre>";
	print_r($_COOKIE); // We can access to cookies with that super global.
	echo "</pre>";

	?>
</body>
</html>