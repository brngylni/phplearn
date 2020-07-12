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


// We can define any variable or constant in arrays.

$Name = "Mehmet";
$Surname = "Geylani";

define("WARE" , "Table");
define("VEHICLE" , "Steambot");


const COLOR = "blue";
const LANG = "PHP";



$Values = array($Name , $Surname , WARE , VEHICLE , "Color" => COLOR , LANG , "Cinema");


echo "<pre>";
print_r($Values);
echo "<pre/>";



	?>
</body>
</html>

	