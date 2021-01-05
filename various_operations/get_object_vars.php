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
	get_object_vars() : It finds the properties and variables of specified class then returns it as an array.In this method, just the methods that has public modifier would be evaluated.
	*/

	class Trial{
		public static $name = "Mehmet";
		public $surname = "Geylani";
		var $age = 20;

	}

	$object = new Trial;

	echo "<pre>";
	print_r(get_object_vars($object));
	echo "</pre>";

	?>
</body>
</html>