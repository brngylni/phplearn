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
	get_declared_vars() : It finds the properties and variables of specified classroom then returns those as an array.In this method, the values that has public and static modifiers would be evaluated.
	*/

	class Trail{
		public static $name = "mehmet";
		private static $surname = "geylani";
		var $age = 20;
	}

	echo "<pre>";
	print_r(get_class_vars("Trail"));
	echo "</pre>";

	?>
</body>
</html>