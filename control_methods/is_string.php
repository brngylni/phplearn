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
	is_string() : It is using to check if the specified variable's content is a string or not.Result returns as boolean.	
	*/

	$value = "Mehmet Geylani";
	$value2 = true;

	if(is_string($value)){
		echo "Content is string.<br />";
	}else{
		echo "Content isn't string.<br />";
	}
	if(is_string($value2)){
		echo "Content is string.<br />";
	}else{
		echo "Content isn't string.<br />";
	}


	?>
</body>
</html>