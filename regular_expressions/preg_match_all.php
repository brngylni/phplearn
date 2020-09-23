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
	preg_match() 	:  It is using to controll the content according to the parameter that consists regular expressions that we specified then it's creates.If it'd catch a match, it creates an array and return it.

	preg_match_all() 	:  It is using to controll the content according to the parameter that consists regular expressions that we specified then it's creates.If it'd catch a match, it creates an array and return it.It returns the all matchs.
	*/
	$Text 		=	"Hello , my name is Mehmet Geylani, ı am a php developer.You can find me on facebook by the search 'Mehmet Geylani'";
	$Pattern 	=	"/Mehmet/";

	preg_match_all($Pattern, $Text, $Result);

	echo "<pre>";
	print_r($Result);
	echo "</pre>";
	
	if($Result){
		echo "There is a match!";   //It always returns the first statement because preg_match_all always creates a recursive arrays.
	}else{
		echo "There isn't any matches";


	?>
</body>
</html>