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
	get_declared_interfaces() : It finds the list of whole interfaces in PHP and defined by user then returns those as an array.
	*/

	interface ICustomerDal{

	}

	echo "<pre>";
	print_r(get_declared_interfaces());
	echo "</pre>";

	?>
</body>
</html>