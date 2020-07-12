<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Learning PHP</title>
</head>
<body>
	<?php

	//Transferring a multiple arrays to one variable

	$Names = array("Mehmet" , "Baran");
	$Colors = array("Blue" , "White" , "Black");
	

	echo "<pre>";
	print_r($Names);
	echo "</pre>";

	echo "<pre>";
	print_r($Colors);
	echo "</pre>";

	$Conclusion = $Names + $Colors; //Logical mistake.It would always takes the first arrays components.
	//There is a conflicting in here.

	echo "<pre>";
	print_r($Conclusion);
	echo "</pre>";
	//It would be true when we define the key names for each indexes.

	



	?>
</body>
</html>

	