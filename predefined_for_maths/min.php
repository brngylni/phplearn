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
	min()		:	It returns the minimum value of any variable content or array element in the situation of that values are numerical.
	*/

	$Numbers		=	array(5,6,72,24,12,4,21,535,213,432,12,44,12,3);

	echo "<pre>";
	print_r($Numbers);
	echo "</pre>";

	$minimum		=	min($Numbers);

	echo "Minimum value of the array above is : " . $minimum . "<br />";

	$Numbers2		=	min(5,6,72,24,12,4,21,535,213,432,12,44,12,3);
	
	echo "Minimum value of that numbers (5,6,72,24,12,4,21,535,213,432,12,44,12,3) is : " . $Numbers2;


	?>	
</body>
</html>