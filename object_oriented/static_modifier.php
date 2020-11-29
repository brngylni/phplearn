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

		class Process{

			public static $name = "Mehmet";
			public static function print() {
				echo 5;
			}
		}

		echo Process::$name . "<br />";	// We can access to property without calling the class or creating an object.Static properties can't be changed like every constant.
		Process::print(); // We can also access to static functiouns without calling class.
	?>
</body>
</html>