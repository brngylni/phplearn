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
	rand()		:	It returns a random integer number.
	*/

	$Numberator1		=	rand(0, 1000);
	$Numberator2		=	rand(5000, 123123); // We can define intervals like these.
	$Numberator3		=	rand(1312, 12332);
	$Numberator4		=	rand(0, 100);
	$Numberator5		=	rand(300, 500);

	echo "The number between 0, 1000 which generated by php is : " . $Numberator1 . "<br />";	
	echo "The number between 5000, 123123 which generated by php is : " . $Numberator2 . "<br />";	
	echo "The number between 1312, 12332 which generated by php is : " . $Numberator3 . "<br />";	
	echo "The number between 0, 100 which generated by php is : " . $Numberator4 . "<br />";	
	echo "The number between 300, 500 which generated by php is : " . $Numberator5 . "<br />";	

	?>
</body>
</html>