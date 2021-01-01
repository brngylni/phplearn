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
	is_object() : It is using to check if the specified variable's content is an object or not.Result returns as boolean.	
	*/
	class Trial{

	}

	$result = new Trial;
	$value2 = 23;

	if(is_object($result)){
		echo "Content is object.<br />";
	}else{
		echo "Content isn't object..<br />";
	}
	if(is_object($value2)){
		echo "Content is object.<br />";
	}else{
		echo "Content isn't object.<br />";
	}
	?>
</body>
</html>