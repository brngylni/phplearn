<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Splice()</title>
</head>
<body>
<?php
/*
array_splice()		:	It is using for create a new array from the older one.It takes certain parts of old array,
,deletes certain parts of old array and it can add new parts if we specify.
*/


 $Names		=	array("Mehmet", "Baran", "Geylani", "Kara", "Kerim", "Rüstem", "Berfin", "Çiğdem");


 
echo "<pre>";
print_r($Names);
echo "</pre><br />";

$Array		=array_splice($Names, 4);

echo "<pre>";
print_r($Names);  //It returns the first 4 element.
echo "</pre><br />";
//Key names will be held in both usage.
echo "<pre>";
print_r($Array);    //It returns the last 4 element when it's defined in array.
echo "</pre><br />";

?>
</body>
</html>

	