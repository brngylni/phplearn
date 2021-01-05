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
	get_defined_functions() : It finds the list of whole functions in PHP and defined by user then returns those as an array.
	*/

	function printer(){
		echo "Mehmet";
	}

	echo "<pre>";
	print_r(get_defined_functions());
	echo "</pre>";

	?>
</body>
</html>