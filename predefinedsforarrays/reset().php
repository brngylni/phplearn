<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Reset()</title>
</head>
<body>
<?php

/*
reset() 	: We can reset the pointers location if it changed.
We can do it with "reset()".It moves the pointer to its first location.
*/

$Names 	= array("Mehmet", "Baran" , "Geylani" , "Kara" , "Kerim");


echo "<pre>";
print_r($Names);
echo "</pre>";

$Pointer 	= key($Names);
echo "Pointers default key name : " . $Pointer . "<br />";
$Element 	= current($Names);
echo "Pointers default value : " . $Element . "<br /><br /><br />";

echo "next<br /><br />";
next($Names);

$Pointer2 	= key($Names);
$Element2 	= current($Names);
echo "Pointers changed location is " . $Pointer2 . "<br />";
echo "Pointers changed value is " . $Element2 . "<br /><br /><br />";

echo "next<br /><br />";
next($Names);

$Pointer2 	= key($Names);
$Element2 	= current($Names);
echo "Pointers changed location is " . $Pointer2 . "<br />";
echo "Pointers changed value is " . $Element2 . "<br /><br /><br />";

echo "prev<br /><br />";
prev($Names);

$Pointer2 	= key($Names);
$Element2 	= current($Names);
echo "Pointers changed location is " . $Pointer2 . "<br />";
echo "Pointers changed value is " . $Element2 . "<br /><br /><br />";

echo "reset<br /><br />";
reset($Names);

$Pointer2 	= key($Names);
$Element2 	= current($Names);
echo "Pointers changed location is " . $Pointer2 . "<br />";
echo "Pointers changed value is " . $Element2 . "<br /><br /><br />";

echo "We can do anything to pointers location as we can see in here :)";








?>
</body>
</html>

	