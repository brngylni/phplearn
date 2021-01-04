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
	getenv() : It is using to fine specified environment variable's value.
	*/

	echo "<pre>";
	print_r(getenv());
	echo "</pre>";

	echo "Device's OS : " . getenv("OS") . "<br />";
	echo "Device's Username : " . getenv("Username") . "<br />";

	?>
</body>
</html>