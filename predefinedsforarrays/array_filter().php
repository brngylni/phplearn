<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
	<title>Learning PHP</title>
</head>
<body>
	<?php

	/*
It is using to create a new array by filtering out empty elements of an old array.
	*/


	$Colors		=	array("Blue", "Red","", "White", "", "", "Black", "Grey");

	echo "<pre>";
	print_r($Colors);
	echo "</pre>";


	$Conclusion		=	array_filter($Colors);


	echo "<pre>";
	print_r($Conclusion);
	echo "</pre>";

	




	?>
</body>
</html>

	