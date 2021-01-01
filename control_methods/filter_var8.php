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
	// Requires a query after url.
	$value = "http://www.google.com/index.php?user&id=5";
	$value2 = "http://www.google.com";

	if(filter_var($value, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
		echo "This is a query<br />";
	}else{
		echo "This isn't a query<br />";
	}

	if(filter_var($value2, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
		echo "This is a query<br />";
	}else{
		echo "This isn't a query<br />";
	}
	?>
</body>
</html>