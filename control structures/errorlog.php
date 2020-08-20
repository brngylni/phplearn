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
	error_reporting()	:	It is using to setting up the levels of errorsç
	
	Error levels 	:	E_ALL | E_ERROR | E_WARNING | E_PARSE | E_NOTICE	

	E_ALL 		:	All level errors. (Other notation type : -1)
	E_ERROR 	:	Fatal runtime errors.
	E_WARNING	:	Non fatal  runtime errors.
	E_PARSE 	:	Compile-time parse errors.
	E_NOTICE	:	Runtime notifications.
	0			:	It does close all level errors.
	*/

	// If we cant acces to php.ini:

	error_reporting(0); //We can use the parameters above instead of "0" in which the brackets.

	deneme();

	echo "It isn't displaying any errors although there is a fatal error";



	?>
</body>
</html>