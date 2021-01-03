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
	is_uploaded_file() : It is using to check either the specified file uploaded or not.
	*/

	$file = "sample2.txt";

	if(is_uploaded_file($file)){
		echo "The file is uploaded";
	}else{
		echo "The file isn't uploaded";
	}
	?>
</body>
</html>