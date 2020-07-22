<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Explode()</title>
</head>
<body>
<?php

/*
explode() 	: It is using for create a new array and fill the array with  text which
shredded from the brackets we specified.
*/

$Value 	= "Mehmet Baran Geylani";


 $Conclusion 	= explode(" " , $Value);


echo "First version of text : " . $Value . "<br /><br />";

echo "<pre>";
print_r($Conclusion);
echo "</pre>";

$Team = "Fenerbahçe,Beşiktaş,Galatasaray,Trabzonspor,Başakşehir";

$Conclusion2 	= explode("," , $Team , 3);


echo "First version of text : " . $Team . "<br /><br />";

echo "<pre>";
print_r($Conclusion2);
echo "</pre>";


$Conclusion3 	= explode("," , $Team , -1);


echo "First version of text : " . $Team . "<br /><br />";

echo "<pre>";
print_r($Conclusion3);
echo "</pre>";



?>
</body>
</html>

	