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
	date_sun_info() 	: 	It creates a new array and fills it with sunrise, sunset, afternoon and twilight informatinos according to specified location values then returns it.Parameters : 1-) Time stamp , 2-) Latitude, 3-) Longtitude 

	date_sunrise() 		: It returns the sunrise informations of specified location.
	Parameters : 1-) Self , 2-) Latitude, 3-) Longtitude
	date_sunset() 		: It returns the sunset informations of specified location.
	Parameters : 1-) Self , 2-) Latitude, 3-) Longtitude
	
	date_sunrise() and date_sunsey() defined parameters : 
	1. SUNFUNCS_RET_STRİNG		: Retuns the result as a 'string'.
	2. SUNFUNCS_RET_DOUBLE		: Returns the result as a 'double'.
	3. SUNFUNCS_RET_TIMESTAMP	: Returns the result as a 'timestamp'.
	*/

	setlocale(LC_ALL, "turkish.utf-8");
	$timestamp 	=	time();

	echo "Time stamp of 08.12.1980 : " . $timestamp . "<br />";

	$ask 	=	date_sun_info($timestamp, 39.837883, 32.554321);

	foreach($ask as $index => $value){
		echo $index . " = " . date("H:i:s", $value) . "<br />";
	}


	?>
</body>
</html>