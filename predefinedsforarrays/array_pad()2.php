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
	
	array_pad()		:	It is using to create a new array based on the number of elements of an old array by filling it from beginning or the end according to specified values.
	*/


	$values 	=	array("Mehmet", "Baran", "Geylani");


	echo "<pre>";
	print_r($values);
	echo "</pre>";


	$conclusion		=	array_pad($values, -10, "GeylaniSoftware");
		//We can also fill it from beginning.
		//It does hold the key names.

	echo "<pre>";
	print_r($conclusion);
	echo "</pre>";

	?>
</body>
</html>