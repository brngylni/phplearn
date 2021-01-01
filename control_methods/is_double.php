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
	is_double() : It is using to check if the specified variable's content is a double or not.Result returns as boolean.	
	*/
	$value = 123.42;
	$value2 = 52;

	if(is_double($value)){
		echo "Content is double.<br />";
	}else{
		echo "Content isn't double..<br />";
	}
	if(is_double($value2)){
		echo "Content is double.<br />";
	}else{
		echo "Content isn't double.<br />";
	}

	?>
</body>
</html>