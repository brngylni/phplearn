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
		}

		echo Process::$name;	// We can access to property without calling the class or creating an object.Static properties can't be changed like every constant.


	?>
</body>
</html>