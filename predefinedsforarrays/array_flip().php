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

	array_flip()	: It is using to substitute the elements and keys.

	*/

	$Values		=	array("Key1" => "Data1", "Key2" => "Data2", "Key3" => "Data3");


	echo "<pre>";
	print_r($Values);
	echo "</pre><br />";

	$Process	=	array_flip($Values);

	echo "array_flip <br /> || ";

	echo "<pre>";
	print_r($Process);
	echo "</pre><br />";




	?>
</body>
</html>