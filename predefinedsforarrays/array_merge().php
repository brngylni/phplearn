<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>array_merge()</title>
</head>
<body>
<?php
/*
array_merge() 			 : It using for combine more than one arrays and create one array which includes the combined ones
.array_merge_recursive() : Same as "array_merge()" but more advanced than it. 	

*/

$Array1 	= array("First" => "Mehmet" , "Baran" , "Geylani");
$Array2 	= array("Kerim" , "Berfin" ,"First" => "Rüstem" , "Nur" , "Kara");
$Array3 	= array("Blue" ,"First" => "Black" , "Red" , "White");
$NewArray 	= array_merge($Array1 , $Array2);
$NewArray2 	= array_merge($Array1 , $Array2 , $Array3);
$NewArray3 	= array_merge_recursive($Array1 , $Array2 , $Array3);


echo "<pre>";
print_r($Array1);
echo "</pre><br /><br /><br />";

echo "<pre>";
print_r($Array2);
echo "</pre><br /><br /><br />";

echo "<pre>";
print_r($Array3);
echo "</pre><br /><br /><br />";

echo "<pre>";
print_r($NewArray);
echo "</pre><br /><br /><br />";

echo "<pre>";
print_r($NewArray2);
echo "</pre><br /><br /><br />";

echo "<pre>";
print_r($NewArray3);
echo "</pre><br /><br /><br />";




//If there is two same key names , key name will stay but it hold the second value.

?>
</body>
</html>

	