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
//Same as array_unshift()...

//We cant assign any key name with array_push(). We can assign just the elements.
$Names 	= array("Mehmet" , "Baran" , "Kerim");

echo "<pre>";
print_r($Names);
echo "</pre>";

array_push($Names , "Berfin" , "Çiğdem");


echo "<pre>";
print_r($Names);
echo "</pre>";


$process 	= array_push($Names , "Burak" , "Barış");

echo "Last total of elements numbers : " . $process;

echo "<pre>";
print_r($Names);
echo "</pre>";

?>
</body>
</html>

	