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
	is_real() : It is using to check if the specified variable's content is a real number or not.Result returns as boolean.	
	*/

	$value = 1233.412412;
	$value2 = 52;

	if(is_real($value)){
		echo "Content is real.<br />";
	}else{
		echo "Content isn't real..<br />";
	}
	if(is_real($value2)){
		echo "Content is real.<br />";
	}else{
		echo "Content isn't real.<br />";
	}
	?>
</body>
</html>