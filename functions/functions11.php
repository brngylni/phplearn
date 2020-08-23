<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title></title>
</head>
<body>
	<?php

	/*
	func_num_args()		:	It is using to find how many parameters sent to function
	func_get_args()		:	It is using to create a new array from parameters that sent to function.
	func_get_arg()		:	It accepts the parameters that came to function as an array and returns the entered key name's element.
	*/


	function Informations(){

	$CameParameterCount		=	func_num_args();

	echo "Count of parameters that came to function : " . $CameParameterCount . "<br />";

	$CameParameterValues	=	func_get_args();

	echo "<pre>";
	print_r($CameParameterValues);
	echo "</pre>";
	}

	Informations("Mehmet", "Geylani", "Ankara", "Student", 20, "Male", "barankara5@gmail.com");

	?>
</body>
</html>