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
	getdate() 	:	It is using to create a new array from current time informations.
	localtime 	:	It is using to create a new array from local time informations.
	Months starts from 0 for this method.
	Year is the count of passed years since 1900.
	*/

	$Time 	=	localtime();

	echo "<pre>";
	print_r($Time);
	echo "</pre>";


	?>
</body>
</html>