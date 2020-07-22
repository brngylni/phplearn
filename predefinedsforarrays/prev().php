<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Prev()</title>
</head>
<body>
<?php

/*
prev() 	: We can change the pointers location with "prev()".
It moves pointers location to previous key.
*/


$Names 	= array("Mehmet", "Baran" , "Geylani" , "Kara" , "Kerim");


echo "<pre>";
print_r($Names);
echo "</pre>";

$Pointer 	= key($Names);
echo "Pointers default key name : " . $Pointer . "<br />";
$Element 	= current($Names);
echo "Pointers default value : " . $Element . "<br /><br /><br />";

next($Names);

$Pointer2 	= key($Names);
$Element2 	= current($Names);
echo "Pointers changed location is " . $Pointer2 . "<br />";
echo "Pointers changed value is " . $Element2 . "<br /><br /><br />";

next($Names);

$Pointer2 	= key($Names);
$Element2 	= current($Names);
echo "Pointers changed location is " . $Pointer2 . "<br />";
echo "Pointers changed value is " . $Element2 . "<br /><br /><br />";


prev($Names);

$Pointer2 	= key($Names);
$Element2 	= current($Names);
echo "Pointers changed location is " . $Pointer2 . "<br />";
echo "Pointers changed value is " . $Element2 . "<br /><br /><br />";





?>
</body>
</html>

	