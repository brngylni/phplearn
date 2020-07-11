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
	Array : Data holders that take sequential datas that we enter or 
	that some sequential values are assigned with the operation of the program.
	
	print_r():It prints arrays as we can read.

	Rules:
	1: Arrays would be created with "array()" or "[]".
	2: Key names that defined in arrays have to include alfanumeric values (a-z, A-Z, 0-9) or "_" (underscore).
	3: Space , Turkish Characters or any special character cannot be used in key names which defined in arrays.
	4: While defining the key names to arrays, we can't use the names that already in use by PHP.
	5: Key names that defining to arrays are responsive to upper-lower cases.
	6: Key names that defining to array components can't be multiple used in same array.
	7: İf we wouldn't define the key names to arrays components, it'd be automatically define the key names to each array component.It'd take numerically values for each component and it'd start from 0 and increase one by one.

	Structure: 
	array(Key => Component, Key => Component, Key =>Component...);
	array(Component, Component, Component...);
*/

//$Names = array("Volkan", "Hakan");

//print_r($Names); //Prints : Array ( [0] => Volkan [1] => Hakan ) 

/*echo "<pre>";
print_r($Names); Provides a more organized display.Easier to read.
echo "<pre/>";*/


/* echo $Names[1];  Prints "Hakan".We can access to each component with use its index number or key name.  */ 
//$Names = array("Name" => "Baran" , "Surname" => "Geylani", "Age" => "20");

/*echo "<pre>";
print_r($Names);
echo "</pre>";
*/

/*echo $Names["Name"] . "<br/>";
echo $Names["Surname"] . "<br/>";
echo $Names["Age"] . "<br/>";
*/

/*$Names = array("Color" => "Blue" , "Boat" , "Lang" => "PHP" , "Shoes" , "TV");

echo "<pre>";
print_r($Names);
echo "<pre/>";
*/


?>

</body>
	</html>