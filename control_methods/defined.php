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
	defined() 	: It is using to check either the specified constant exists or not then returns the result as boolean data type.
	*/
	define("NAME", "Baran");
	$control = defined("NAME");


	if($control){
		echo "There is a constant that named as NAME";
	}else{
		echo "There isn't such a constant that named as NAME";
	}


	?>
</body>
</html>