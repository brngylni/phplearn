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
	is_null() : It is using to check if the specified variable's content is null or not.Result returns as boolean.	
	*/
	$value = null;
	$value2 = 52;

	if(is_null($value)){
		echo "Content is null.<br />";
	}else{
		echo "Content isn't null..<br />";
	}
	if(is_null($value2)){
		echo "Content is null.<br />";
	}else{
		echo "Content isn't null.<br />";
	}
	?>
</body>
</html>