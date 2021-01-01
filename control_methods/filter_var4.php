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
	$value = "barana";
	$value2 = "google.com";
	$value3 = "www.google.com";
	$value4 = "http://google.com";

	if(filter_var($value, FILTER_VALIDATE_URL)){
		echo "This is a URL.<br />";
	}else{
		echo "This isn't a URL<br />";
	}if(filter_var($value2, FILTER_VALIDATE_URL)){
		echo "This is a URL.<br />";
	}else{
		echo "This isn't a URL<br />";
	}if(filter_var($value3, FILTER_VALIDATE_URL)){
		echo "This is a URL.<br />";
	}else{
		echo "This isn't a URL<br />";
	}if(filter_var($value4, FILTER_VALIDATE_URL)){
		echo "This is a URL.<br />";
	}else{
		echo $value4 . "isn't a URL<br />";
	}

	?>
</body>
</html>