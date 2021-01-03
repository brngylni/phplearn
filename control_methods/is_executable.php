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
	is_executable() : It is using to check either the specified file is executable or not.
	*/

	$file = "sample2.txt";

	if(is_executable($file)){
		echo "The file is executable";
	}else{
		echo "The file isn't executable";
	}

	?>
</body>
</html>