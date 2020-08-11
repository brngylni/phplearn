<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Min()</title>
</head>
<body>
	<?php
		/*
		min()	: If we have an array which contains numerical values, it returns the smallest value.
		*/





		$Numbers	=	array(2, 12, 23, 54, 76, 3, -5, 675, 33);

		echo "<pre>";
		print_r($Numbers);
		echo "</pre>";

		$minimum	=	min($Numbers);

		echo "Minimum value in the array is :" . $minimum;

	?>
</body>
</html>