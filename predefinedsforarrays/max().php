<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Max()</title>
</head>
<body>
	<?php
		/*
		max()	:If we have an array which contains numerical values, it returns the biggest value.
		*/



		$Numbers	=	array(2, 12, 23, 54, -7, 76, 3, 675, 33);

		echo "<pre>";
		print_r($Numbers);
		echo "</pre>";

		$maximum	=	max($Numbers);

		echo "Minimum value in the array is :" . $maximum;

	?>
</body>
</html>