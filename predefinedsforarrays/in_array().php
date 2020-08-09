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

	in_array()	:	It is using to controll if the specified elemet exists or not.

	*/

	$Values		=	array("A1" => "Mehmet", "A2" => "Baran", "A3" =>"Kara", "A4" => "Geylani", "A5" => "Kerim");


	echo "<pre>";
	print_r($Values);
	echo "</pre><br />";

	$Conclusion		=	in_array("Mehmet", $Values);

	echo $Conclusion;


	?>
</body>
</html>