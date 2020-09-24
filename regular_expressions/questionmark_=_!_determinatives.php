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
	?=	:	It is using to search any value that before the reference value that we assigned.
	?! 	:	It is using to search any value that independent from the  reference value that we assigned.
	*/

	$Content 	=	"PHP is one of the most common languages in the world and php's learning process is too simple.";
	$Pattern1 	=	"/PHP(?='s)/i"; //This means find the 'PHP' value where the |'s| follows the 'PHP' value.
	$Pattern2 	=	"/PHP(?= )/i";	//This means find the 'PHP' value where the space follows the 'PHP' value.
	$Pattern3 	=	"/PHP(?!')/i"; 	//This means find the 'PHP' value where the |'| not follows the 'PHP' value.
	preg_match_all($Pattern1, $Content, $Result1);
	preg_match_all($Pattern2, $Content, $Result2);
	preg_match_all($Pattern3, $Content, $Result3);

	echo "The original text : " . $Content . "<br />The pattern : " . $Pattern1 . "<br />The result : <br /><pre>";
	print_r($Result1);
	echo "</pre><br />";

	echo "<br />The pattern : ". $Pattern2 . "<br /><pre>";
	print_r($Result2);
	echo "</pre>";

	echo "<br />The pattern : ". $Pattern3 . "<br /><pre>";
	print_r($Result3);
	echo "</pre>";

	?>
</body>
</html>