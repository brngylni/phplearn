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
	fmod()	: Same as module operator (%). It returns the reminder in division process.
	*/

	$Number1	=	124212;
	$Number2	=	23;
	$Reminder 	=	fmod($Number1, $Number2);

	echo "Reminder in the division of 124212 to 23 is : " . $Reminder;
	?>
</body>
</html>