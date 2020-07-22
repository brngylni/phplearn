a<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>pos()</title>
</head>
<body>
<?php

/*
pos() 	: Same as "current()".
*/

$Names 	= array("Mehmet" , "Baran" , "Kerim");

echo "<pre>";
print_r($Names);
echo "</pre>";

$Conclusion 	= pos($Names);

echo "The pointer of the array : " . $Conclusion . "<br />";

//It can work even if key names assigned by user.

$Names2 	= array("Firstnm" => "Mehmet" , "Baran" , "Kerim");
$Conclusion2 	= pos($Names2);


echo "The pointer of second array : " . $Conclusion2 . "<br />";










?>
</body>
</html>

	