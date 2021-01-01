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
	is_float() : It is using to check if the specified variable's content is a float or not.Result returns as boolean.	
	*/
	$value = "Mehmet Geylani";
	$value2 = 52213213123124132.124123123;

	if(is_float($value)){
		echo "Content is float.<br />";
	}else{
		echo "Content isn't float..<br />";
	}
	if(is_float($value2)){
		echo "Content is float.<br />";
	}else{
		echo "Content isn't float.<br />";
	}
	?>
</body>
</html>