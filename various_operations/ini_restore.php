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
	ini_restore() : It resets the reset a configuration which set by ini_set() method.
	*/
	ini_set("session.cache_expire",  10);
	echo ini_get("session.cache_expire") . "<br />";
	ini_restore("session.cache_expire");
	echo ini_get("session.cache_expire") . "<br />";

	?>
</body>
</html>