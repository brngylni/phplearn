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
	ini_set() : It allows us to change or set any configuration value.
	*/

	ini_set("session.cache_expire", 10);
	echo ini_get("session.cache_expire");

	?>
</body>
</html>