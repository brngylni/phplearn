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
	$value = "baranasi";
	$value2 = "barankara5@gmail.com";

	if(filter_var($value, FILTER_VALIDATE_EMAIL)){
		echo "This is a mail address.<br />";
	}else{
		echo "This isn't a mail address<br />";
	}if(filter_var($value2, FILTER_VALIDATE_EMAIL)){
		echo "This is a mail address.<br />";
	}else{
		echo "This isn't a mail address<br />";
	}

	?>
</body>
</html>