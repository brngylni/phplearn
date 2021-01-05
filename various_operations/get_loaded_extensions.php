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
	get_loaded_extensions() : It is using to fetch the list of modules that installed to system then returns them as an array.
	*/

	echo "<pre>";
	print_r(get_loaded_extensions());
	echo "</pre>";

	?>
</body>
</html>