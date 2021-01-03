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
	is_writable() : It is using to check either the specified file is writable or not.
	*/

	$file = "sample2.txt";

	if(is_writable($file)){
		echo "The file is writable";
	}else{
		echo "The file isn't writable";
	}
	?>
</body>
</html>