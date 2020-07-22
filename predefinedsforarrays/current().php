<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>current()</title>
</head>
<body>
<?php

/*
current() 	: It returns the pointer element of array.The pointer of an array is always the first element of array.
If the pointer is an array , we have to use "print_r()" to print it.It returns arrays value.
*/

$Names 	= array("Mehmet" , "Baran" , "Kerim");

echo "<pre>";
print_r($Names);
echo "</pre>";

$Conclusion 	= current($Names);

echo "The pointer of the array : " . $Conclusion . "<br />";

//It can work even if key names assigned by user.

$Names2 	= array("Firstnm" => "Mehmet" , "Baran" , "Kerim");
$Conclusion2 	= current($Names2);


echo "The pointer of second array : " . $Conclusion2 . "<br />";

?>
</body>
</html>

	