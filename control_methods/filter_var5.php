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

	$value = "http://www.google.com";
	$value2 = "www.google.com";

	if(filter_var($value, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED)){
		echo "This is a URL<br />";
	}else{
		echo "This isn't a URL<br />";
	}

	if(filter_var($value2, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED)){
		echo "This is a URL<br />";
	}else{
		echo "This isn't a URL<br />";
	}
	?>
</body>
</html>