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

	//Assigning an array to a different variable

	$Names = array("Mehmet" , "Baran" , "Geylani");

	echo "<pre>";
	print_r($Names);
	echo "</pre><br/><br/>";

	$Values = $Names; // same as array("Mehmet" , "Baran" , "Geylani");


	echo "<pre>";
	print_r($Values);
	echo "</pre><br/><br/>";






	//İf we dont want to change main array.We can change the datas from $Values variable without changing the main array which located in $names variable.

	?>
</body>
</html>

	