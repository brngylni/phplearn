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

	array_search()	:	It is using to search the elements and return the specified elements key names.

	*/


	$Values		=	array("A1" => "Mehmet", "A2" => "Baran", "A3" =>"Kara", "A4" => "Geylani", "A5" => "Kerim");


	echo "<pre>";
	print_r($Values);
	echo "</pre><br />";

	$Conclusion		=	array_search("Mehmet", $Values);

	echo "The element that we looking for :" . $Conclusion;
	//We've to add "true" parameter to care about data type.

	?>
</body>
</html>