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
	*/

	$Time 	=	getdate();

	echo "Year : " . $Time["year"] . "<br />"; // 2020
	echo "Month : " . $Time["mon"] . "<br />";	// 11
	echo "Day : " . $Time["mday"] . "<br />"; // 11 
	echo "Hour : " . $Time["hours"] . "<br />"; // 19
	echo "Minute : " . $Time["minutes"] . "<br />"; // 29
	echo "Second : " . $Time["seconds"] . "<br />"; // 24
	echo "Year day : " . $Time["yday"] . "<br />"; // 315
	echo "Week day : " . $Time["wday"] . "<br />"; // 3
	echo "Day :  : " . $Time["weekday"] . "<br />"; // Wednesday



	?>
</body>
</html>