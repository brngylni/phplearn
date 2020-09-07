<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>End()</title>
</head>
<body>
<?php

/*
end() 	: It is using to find the element in which last location of pointer.
Actually the last element of an array.
*/

$Names 	= array("Mehmet" , "Baran" , "Geylani");

echo "<pre>";
print_r($Names);
echo "</pre>";

$Conclusion 	= end($Names);

echo "The last element of the array : " . $Conclusion . "<br />";

//We can use it for any multi-dimensional arrays or any element of array which we assigned the key name manually.

	

?>
</body>
</html>

	