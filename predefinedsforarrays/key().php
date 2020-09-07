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

key() 	: It is using to find the key name of the element which the pointer of the array.
Pointer is generally  the first element of the array if the key names not changed.
*/

$Names 	= array("Mehmet" , "Baran" , "Geylani");

echo "<pre>";
print_r($Names);
echo "</pre><br />";

$conclusion 	= key($Names);
echo "Pointer element of array : " . $conclusion . "<br />";

$Names2 	= array("Bir" => "Mehmet" , "Baran", "Geylani" , array("Ibanez" , "PRS"));
$Conclusion = key($Names2);
$Conc 	= key($Names2[2]);


echo "Key value of pointer : " .  $Conclusion . "<br />";
echo "Key value of pointer : " .  $Conc . "<br />";

?>
</body>
</html>

	