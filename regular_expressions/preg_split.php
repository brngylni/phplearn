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
	preg_split()	:	It is using to control any content by the given parameters.If there is any matches, it splits the content with matches and creates an array then returns it.The given parameter wouldn't be in created array.
	*/

	$Content 	=	"Hello, my name is Mehmet Geylani, i am a PHP developer. You can find me on facebook by the searching as Mehmet Geylani.";
	$Pattern	=	"/ /"; //This would split the content from each space character.
	$Pattern2 	=	"//u"; //This usage splits the content from each character."u" parameters allows us to see Turkish characters.(unicode)
	$Result 	=	preg_split($Pattern, $Content);
	$Result2	=	preg_split($Pattern2, $Content);

	echo "The original content : <br />" . $Content . "<br /><br />";
	echo "The edited content : <br /><pre>";
	print_r($Result);
	echo "</pre>";

	echo "The original content : <br />" . $Content . "<br /><br />";
	echo "The edited content : <br /><pre>";
	print_r($Result2);
	echo "</pre>";
	?>
</body>
</html>