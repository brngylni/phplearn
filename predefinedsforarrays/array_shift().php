<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Shift()</title>
</head>
<body>
<?php

/*

array_shift() 	: It deletes the first element of an array even if the key name defined.
Also it returns the value of the element which it deleted.Key names would reorder when it used.

*/

$Names 	= array( "Fnm"  => "Mehmet" ,"Secndnm" => "Baran" , "Nissan" , "BMW" ,  array("İbanez" , "PRS" , "Gibson"),"Kerim" , "Berfin" , "Çiğdem");

echo "<pre>";
print_r($Names);
echo "</pre><br />";

array_shift($Names);
array_shift($Names);

echo "<pre>";
print_r($Names);
echo "</pre>";

$delete 	= array_shift($Names);
$delete2 	= array_shift($Names[1]); 
echo "Value of the data which removed : " . $delete . "<br />"; 

echo "<pre>";
print_r($Names);
echo "</pre>";

echo "Value of the data which removed last : " . $delete2 . "<br />"; //We deleted the first element of second array.

echo "<pre>";
print_r($Names);
echo "</pre>";






?>
</body>
</html>

	