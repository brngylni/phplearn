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
	date() 			: 	It is using to find the date and time informations and edit them.
	checkdate() 	:	It is using to find the specified time's identification according to Gregorian Calendar and yield a boolean value.
	*/

	$Value 	=	checkdate(12, 8, 1980);

	if($Value == 1){
		echo "It is an appropriate value for Gregorian Calendar";
	}else{
		echo "It is a not valid date.";
	}




	?>
</body>
</html>