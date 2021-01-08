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
	exec() : It runs the specified command then returns the outputs as an array.
	*/
	
	exec("ping google.com", $result);

	echo "<pre>";
	print_r($result);
	echo "</pre>";

	?>
</body>
</html>