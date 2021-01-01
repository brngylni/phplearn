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
	is_long() : It is using to check if the specified variable's content is a long or not.Result returns as boolean.	
	*/

	$value = "Mehmet Geylani";
	$value2 = 9999999.213321;

	if(is_long($value)){
		echo "Content is long.<br />";
	}else{
		echo "Content isn't long..<br />";
	}
	if(is_long($value2)){
		echo "Content is long.<br />";
	}else{
		echo "Content isn't long.<br />";
	}
	?>
</body>
</html>