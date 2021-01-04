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
	var_export() : It is using to controll either the specified variable has content or not.If yes, prints it.
	*/

	$name = "Baran<br />";
	$double = 10.242;

	echo $name . "<br />";

	var_export($name);
	var_export($double);

	?>
</body>
</html>