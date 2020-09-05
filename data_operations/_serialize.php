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
	serialize()		:	It converts any value to preservable data and it returns that data.
	unserialize()	: 	It converts the preservable datas which converted with serialize() to its original version and returns the its original version.
	*/

	$Informations		=	array("Name" => "Mehmet", "Surname" => "Geylani", "City" => "Ankara", "Age" => 20);

	echo "<pre>";
	print_r($Informations);
	echo "</pre><br /><br />";

	$Conclusion		=	serialize($Informations);

	echo $Conclusion;

	?>
</body>
</html>