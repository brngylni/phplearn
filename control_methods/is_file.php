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
	is_file() : It is using to check the specified file exists or not.
	*/

	$file = "sample2.txt";

	if(is_file($file)){
		echo "Yes";
	}else{
		echo "No";
	}

	?>
</body>
</html>