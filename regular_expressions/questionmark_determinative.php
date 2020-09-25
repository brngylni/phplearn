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
	 ? 	: 	It is using to search the values that repeated either 0 or 1 times.
	*/

	 $Value 	=	"Mehmet - Baran -- Kara --- Geylani";
	 $Pattern 	= 		"/-?/"; //It is similar with star determinative.The difference is it catchs all values seperately.It means like controlling digit by digit.
	 preg_match_all($Pattern, $Value, $Result);

	 echo "The content : " . $Value . "<br /><pre>";
	 print_r($Result);
	 echo "</pre>";



	?>
</body>
</html>