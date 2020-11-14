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

	$timestamp 	=	time();
	$sunriseString 	=	date_sunrise($timestamp, SUNFUNCS_RET_STRING, 39.837883, 32.554321);
	$sunriseDouble 	=	date_sunrise($timestamp, SUNFUNCS_RET_DOUBLE, 39.837883, 32.554321);
	$sunriseStamp 	=	date_sunrise($timestamp, SUNFUNCS_RET_TIMESTAMP, 39.837883, 32.554321);
	$sunsetStamp 	=	date_sunset($timestamp, SUNFUNCS_RET_TIMESTAMP, 39.837883, 32.554321);
	$sunsetString 	=	date_sunset($timestamp, SUNFUNCS_RET_STRING, 39.837883, 32.554321);
	$sunsetDouble 	=	date_sunset($timestamp, SUNFUNCS_RET_DOUBLE, 39.837883, 32.554321);

	echo "The current sunset time is : " . $sunsetString . "<br />";
	echo "The current sunrise time is : " . $sunriseString . "<br />";



	?>
</body>
</html>