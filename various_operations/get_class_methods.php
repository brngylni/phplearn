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
	get_declared_methods() : It finds the methods of specified classroom then returns those as an array.
	*/
	class Trial{
		public function printer(){
			echo "Mehmet";
		}
	}

	echo "<pre>";
	print_r(get_class_methods("Trial"));
	echo "</pre>";

	?>
</body>
</html>