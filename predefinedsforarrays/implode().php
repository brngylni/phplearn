<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Implode()</title>
</head>
<body>
<?php
/*
implode() 	: It combines an array and makes it a text.
Simply , opposite of "explode()".

*/

$Names 	= array("Mehmet", "Baran" , "Geylani" , "Kara");

echo "<pre>";
print_r($Names);
echo "</pre>";

$Conclusion 	= implode($Names);
$Conclusion2 	= implode(" | " , $Names);
echo $Conclusion . "<br /><br />";
echo $Conclusion2;

?>
</body>
</html>

	