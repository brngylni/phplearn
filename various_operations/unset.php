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
	unset() 	:	It is using to delete an array's index and component or session.
	*/
	
	$name = "Baran";
	$surname = "Geylani";
	$list = array(1,2,3,4,5);

	echo "<pre>";
	print_r($list);
	echo $name . " " . $surname;
	unset($name); // This line removes the $name variable.
	unset($surname); // This line removes the $name variable.
	unset($list[3]); // This line removes the $name variable.
	echo $name . " " . $surname;
	print_r($list);
	echo "</pre>";
	?>
</body>
</html>