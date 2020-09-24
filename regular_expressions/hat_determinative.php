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
	^	: It is using to catch matches between beginning of character string of content and regular expression.
	*/

	$Content 	= 	"From A to Z PHP7 education kit.";
	$Pattern 	=	"/^PHP7/"; //It would catch a match without ^ determinative.It wouldn't return any match now because PHP7 value isn't at the beginning of the statement.
	$Result 	= 	preg_match($Pattern, $Content);

	echo "The original content : " . $Content . "<br />";
	echo "The pattern : " . $Pattern . "<br />";

	if($Result==1){
		echo "The value that we looking for is at the beginning of content.";
	}else{
		echo "The value that we looking for isn't at the beginning of content.";
	}

	?>
</body>
</html>