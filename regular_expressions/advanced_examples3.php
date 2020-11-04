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
		//Fetching the phone numbers from content.
	$Content 	=	"05423139870";
	$Pattern 	= 	"/ ?0?\s?[0-9]{3}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2} ?/";

	$Result		=	preg_match($Pattern, $Content);
	
	if($Result==1){
		echo "Entered Value (" . $Content . ") is a valid phone number.";
	}else{
		echo "Entered value (" . $Content . ") isn't a valid phone number.";
	}


	?>
</body>
</html>	