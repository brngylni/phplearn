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
	set_time_limit() : It is using to assign maximum runtime to a php file.
	*/
	echo "Maximum execution time : " . ini_get("max_execution_time") . "<br />";

	set_time_limit(200); // It is same as ini_set("max_execution_time", 2).
	echo "Maximum execution time : " . ini_get("max_execution_time") . "<br />";
	
	?>
</body>
</html>