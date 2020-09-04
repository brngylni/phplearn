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
	gettype()	:	This method finds the data type of the any variable's content and returns the type of data.
	*/


	$Value			=	array("Mehmet", "Baran", "Geylani");

	$Conclusion		=	gettype($Value);
	echo "<pre>";
	print_r($Value);
	echo "</pre><br />";

	echo "The data type of  '\$Value' is : " . $Conclusion;

	?>
</body>
</html>