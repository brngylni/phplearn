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
	is_array() : It is using to check if the specified variable's content is an array or not.Result returns as boolean.	
	*/
	$value = 12;
	$value2 = array(123, 32, "sad");

	if(is_array($value)){
		echo "Content is array.<br />";
	}else{
		echo "Content isn't array..<br />";
	}
	if(is_array($value2)){
		echo "Content is array.<br />";
	}else{
		echo "Content isn't array.<br />";
	}
	?>
</body>
</html>