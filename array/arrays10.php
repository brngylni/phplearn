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

//Predefined methods that be used for arrays.

/*
count()		: It using for finding the number of components  in array.
sizeof()	: Same as count().


Those functions can't count the components of multi-dimensional arrays.For this process
we'll use the "COUNT_RECURSIVE" function.

*/


$Names		= array("Mehmet" , "Baran" , "Kerim" , "Ahmet" , "Berfin");

echo "<pre>";
print_r($Names);
echo "</pre";

echo "<br /><br />";

$Numberofcomponents = count($Names);

echo "Number of components in the array: " . $Numberofcomponents;

echo "<br /><br /><br />";

$Numberofcomponents2 = sizeof($Names);

echo "Number of components in the arrays: " . $Numberofcomponents2;
echo "<br /><br />";

//Multi dimensionals

$multi 	= array("Mehmet" , "Baran" , array("Kara" , "Geylani" , array("black" , "blue")) , array("20" , "21"));

$numberofmulti	= sizeof($multi , COUNT_RECURSIVE); //It includes all members to process and it doesn't matter how dimension is existing.

echo "Number of components of multi array : " .  $numberofmulti;

echo "<br /><br />"; 
//We can also use it for any array in array

$numberofmulti2		= sizeof($multi[2]);
$numberofmulti3		= sizeof($multi[2] , COUNT_RECURSIVE);

echo "Number of components of array that have the '2' key name:  " . $numberofmulti2;
echo "<br /><br />";

echo "Number of multi-dimensional array that in array : " . $numberofmulti3;

echo "<br /><br /><br />";

echo "<pre>";
print_r($multi);
echo "</pre>";

?>
</body>
</html>
