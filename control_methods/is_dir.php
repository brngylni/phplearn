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
	is_dir() : It is using to check if the specified path is a directory or not.It always returns the result as boolean. 
	*/

	$directory = "D:/xampp/htdocs/phplearn";

	if(is_dir($directory)){
		echo "Yes";
	}else{
		echo "No";
	}

	?>
</body>
</html>