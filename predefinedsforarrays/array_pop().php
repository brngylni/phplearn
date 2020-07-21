<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Pop()</title>
</head>
<body>
<?php

/*array_pop() 	:It deletes the last element of an array.
Also it returns the value of the element which it deleted.
Ther wouldn't any changes on key names when it used.*/

$Names 	= array("Mehmet" , "Baran" , "Geylani" , "Kerim" ,"Berfin");

echo "<pre>";
print_r($Names);
echo "</pre><br />";
echo "Delete";

array_pop($Names);
array_pop($Names);
$delete 	= array_pop($Names);


echo "<pre>";
print_r($Names);
echo "</pre>";

echo "Last deleted element : " . $delete . "<br />";

echo "<pre>";
print_r($Names);
echo "</pre>";


?>

</body>
</html>

	