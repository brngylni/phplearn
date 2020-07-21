<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Unshift()</title>
</head>
<body>
<?php

/*

array_unshift()		:It is using for addin an element to the beginning of an array.
Also it returns the total number of components in which  array  with last added ones.
//We cant assign any key name with array_unshift(). We can assign just the elements.

*/

$Names		= array("Mehmet" , "Baran" , "Geylani");

echo "<pre>";
print_r($Names);
echo "</pre>";
echo "<br /><br />";


array_unshift($Names , "KEKE" , "ONGO"); //"KEKE" value has happened the data which have the key number 0.

echo "<pre>";
print_r($Names);
echo "</pre><br />";

$process 	= array_unshift($Names, "Berfin" , "Çİğdem");

echo "The data in which process variable : " . $process . "<br /><br /><br />";


$multi = array("Mehmet" , "Baran" , array("Kara" , "Geylani") ,array("Kerim" , "Berfin"));


echo "<pre>";
print_r($multi);
echo "</pre>";


array_unshift($multi , "Rüstem"); //It slid the array2 to key 3.


echo "<pre>";
print_r($multi);
echo "</pre>";


array_unshift($multi[3] , "Burak");
$size 	= array_unshift($multi , "Barış");
$size2 	= array_unshift($multi[4] , "Kerem");
$size3	= array_unshift($multi[5] , "Ümit");

echo "Last total size of first array :" . $size . "<br />";
echo "Last total size of second array :" . $size2 . "<br />";
echo "Last total size of third array :" . $size3 . "<br />";

echo "<pre>";
print_r($multi);
echo "</pre>";
 

?>
</body>
</html>

	