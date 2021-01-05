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
	get_extension_funcs() : It fetchs the all funcsions of specified module then returns them as an array.
	*/

	echo "<pre>";
	print_r(get_extension_funcs("SPL"));
	echo "</pre>";


	?>
</body>
</html>