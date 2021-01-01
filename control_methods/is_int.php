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
	is_int() : It is using to check if the specified variable's content is an integer or not.Result returns as boolean.	
	*/
	$value = "Mehmet Geylani";
	$value2 = 52;

	if(is_int($value)){
		echo "Content is integer.<br />";
	}else{
		echo "Content isn't integer..<br />";
	}
	if(is_int($value2)){
		echo "Content is integer.<br />";
	}else{
		echo "Content isn't integer.<br />";
	}
	?>
</body>
</html>