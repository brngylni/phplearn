<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>List()</title>
</head>
<body>
<?php

/*
list() 	: It is using for assign the elements in which array to variables.
*/

$Colors 	= array("Black" , "White" , "Blue" , "Red" , "Green");

echo "<pre>";
print_r($Colors);
echo "</pre><br /><br />";

list($One, $Two, $Three, $Four, $Five) 	= $Colors; //You can pass if you won't use the value.Just leave it empty


echo $One . "<br />";
echo $Two . "<br />";
echo $Three . "<br />";
echo $Four . "<br />";
echo $Five . "<br /><br /><br /><br /><br />";

//Also works in multi-dimensional structures.
$Multi 	= array("Mehmet",  "Baran" , array("Kara" , "Geylani") , "Kerim");

list($First , $SCN , list($FSNM , $SSNM) , $BRN) 	= $Multi;

echo $First . "<br />";
echo $SCN . "<br />";
echo $FSNM . "<br />";
echo $SSNM . "<br />";
echo $BRN . "<br />";


?>
</body>
</html>

	