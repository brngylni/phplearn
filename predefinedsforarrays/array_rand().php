<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>array_rand()</title>
</head>
<body>
	<?php
	/*
	array_rand()	:	It using to return random elements from any array as we specified.
	*/


	$Names	=	array("Mehmet", "Baran", "Ali", "Veli", "Kerim", "Selim");


	echo "<pre>";
	print_r($Names);
	echo "</pre><br />";


	$Conclusion		=	array_rand($Names, 2);

	echo "<pre>";
	print_r($Conclusion);
	echo "</pre><br />";


	echo $Names[$Conclusion[0]] . "<br />" ;
	echo $Names[$Conclusion[1]] . "<br />" ;

	?>
</body>
</html>