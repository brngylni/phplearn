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

$Names = array("Baran" , "Mehmet" , "Geylani");
$Names =["Baran" , "Mehmet" , "Geylani"];


$Names = array("AD1" =>  "Baran" ,  "AD2" => "Mehmet" , "SOYAD"  =>"Geylani");
$Names = ["AD1" =>  "Baran" ,  "AD2" => "Mehmet" , "SOYAD"  =>"Geylani"];


*/

//HOW  TO CREATE AN ARRAY WİTH JUST VARİABLE STRUCTURE


$Names[] = "Mehmet";
$Names[] = "Baran";
$Names[] = "Geylani";


echo "<pre>";
print_r($Names);
echo "<pre/> <br/> <br/>";

//We can also access to components by key name.

echo $Names[0] . "<br/>";
echo $Names[1] . "<br/>";
echo $Names[2] . "<br/><br/><br/><br/>";

//we can also determine the key names.

$name["first"] = "Mehmet";
$name["second"] = "Baran";


echo $name["first"] . "<br/>" ;
echo $name["second"] . "<br/>";  //calling by the key name which determined from us.



?>
</body>
</html>

	