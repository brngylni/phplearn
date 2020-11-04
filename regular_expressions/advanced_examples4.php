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
		//Fetching the date of birth from content.
	$Content 	=	" 10.04.2000 ";
	$Pattern 	= 	"/^ ?\d{1,2}\.\d{1,2}\.\d{4} ?$/";
 
	$Result 	=	preg_match($Pattern, $Content);

	if($Result == 1){
		echo "Entered value is a date.";
	}else{
		echo "Entered value is not a date.";
	}

	?>
</body>
</html>