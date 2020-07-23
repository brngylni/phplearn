<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>array_slice()</title>
</head>
<body>
<?php
/*
array_slice() 	:It is using for creating a new array from an older  arrays elements.
Key names would be protected if they are alphanumeric.
The parameter of sequence is not about the key name , its about the index sequence(element order).
We can also use "-" parameter to start indexing from end of array.
*/


$Names 	= array("Mehmet", "Baran", "Kara", "Geylani", "Kerim", "Berfin", "Rüstem");


echo "<pre>";
print_r($Names);
echo "</pre>";

$Conclusion 	= 	array_slice($Names , 3);
$Conclusion2 	= 	array_slice($Names , 3 , 2);
$Conclusion3 	= 	array_slice($Names, 3, 2, true); //It will protect the key names..
$Conclusion4 	= 	array_slice($Names, 3, count($Names), true); //It will protect the key names..



echo "<pre>";
print_r($Conclusion);
echo "</pre><br /><br /><br />";

echo "<pre>";
print_r($Conclusion2);
echo "</pre><br /><br /><br />";

echo "<pre>";
print_r($Conclusion3);
echo "</pre><br /><br /><br />";

echo "<pre>";
print_r($Conclusion4);
echo "</pre><br /><br /><br />";




?>
</body>
</html>

	