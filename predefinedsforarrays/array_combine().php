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
/*
array_combine() 	:It combines two different arrays relational and creates a new array.
Elements of first array will be accepted as a key name and the elements of second array will be accepted as datas of keys.
*/

$Array1 	= array("Blue" , "White" , "Red");
$Array2 	= array("Car", "Curtain", "Flag");
$Conclusion = array_combine($Array1, $Array2);

echo "<pre>";
print_r($Array1);
echo "</pre>";


echo "<pre>";
print_r($Array2);
echo "</pre>";

echo "<pre>";
print_r($Conclusion);
echo "</pre>";


?>
</body>
</html>

	