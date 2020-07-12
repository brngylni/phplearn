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
//Adding datas to early defined arrays.

	$Values = array(); // if you define the array with square brackets , it would be a structural error.
	$Values[] = "Baran";
	$Values[] = "Mehmet";
	$Values[] = "Geylani";


	echo "<pre>";
	print_r($Values);
	echo "<pre/>";



	$Name = array();  //Can also be used like this.
	$Name["1"] = "Mehmet <br/>";
	$Name["2"] = "Baran <br/>";

	echo $Name["1"];
	echo $Name["2"];

	echo "<pre>";
	print_r($Name);
	echo "<pre/>";


	?>
</body>
</html>

	