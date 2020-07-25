<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Column()</title>
</head>
<body>
	<?php

	/*
	array_column()	: It is using for create a new array from an old mutli-dimensional array and format the keynames according to our specify.
	*/

	$Names	= array(array("FoundationYear" => "1907", "TeamName" => "Fenerbahçe" ,), array("FoundationYear" => "1905", "TeamName" => "Galatasaray"), array("FoundationYear" => "1903", "TeamName" => "Beşiktaş"));


	echo "<pre>";
	print_r($Names);
	echo "</pre>";

	$Conclusion	= array_column($Names, "TeamName", "FoundationYear");

	echo "<pre>";
	print_r($Conclusion);
	echo "</pre>";





	?>
</body>
</html>

	