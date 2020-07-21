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
	//Multi dimensional ararys.Defining an array in anıther array.
	//$Values = array(     array(     array()        )                );

	$Values = array("Mehmet" , "Baran" , array("BLue" , "Red" , array("Table" , "Chair" , "Stand")) , "Geylani");


	echo "<pre>";
	print_r($Values); 
	echo "</pre>";

	echo $Values[0] . "<br/>";
	echo $Values[1] . "<br/>";
	echo $Values[2][1] . "<br/>"; //Access to it like that.
	echo $Values[3] . "<br/>";

	//We can give names to array indexes in which defined arrays.
	//We can do it also with constants


	?>
</body>
</html>

	