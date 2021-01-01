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
	is_numeric() : It is using to check if the specified variable's content is numeric or not.Result returns as boolean.	
	*/
	$value = "Mehmet Geylani";
	$value2 = 52;

	if(is_numeric($value)){
		echo "Content is numeric.<br />";
	}else{
		echo "Content isn't numeric..<br />";
	}
	if(is_numeric($value2)){
		echo "Content is numeric.<br />";
	}else{
		echo "Content isn't numeric.<br />";
	}
	?>
</body>
</html>