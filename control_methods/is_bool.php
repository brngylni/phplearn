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
	is_bool() : It is using to check if the specified variable's content is boolean or not.Result returns as boolean.	
	*/
	$value = 23;
	$value2 = true;

	if(is_bool($value)){
		echo "Content is bool.<br />";
	}else{
		echo "Content isn't bool..<br />";
	}
	if(is_bool($value2)){
		echo "Content is bool.<br />";
	}else{
		echo "Content isn't bool.<br />";
	}
	?>
</body>
</html>