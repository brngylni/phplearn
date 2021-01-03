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
	file_exists() : It is using to controll the specified path and look for if the file exists or not.It always returns the result as boolean.
	*/

	$file = "sample2.txt";

	if(file_exists($file)){
		echo "Yes";
	}else{
		echo "No";
	}





	?>
</body>
</html>