<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>array_change_key_case()</title>
</head>
<body>
	<?php
	/*
	
	array_change_key_case	:	It is using to the transformation of key name's upper or lower cases.
	CASE_LOWER = It does every key name lower case
	CASE_UPPER = It does every key name upper case
	
	*/

	$Names	=	array("Name1" => "Mehmet", "Name2" => "Baran", "Name3" => "Kara", "Name4" => "Geylani");


	echo "<pre>";
	print_r($Names);
	echo "</pre>";

	$Process	=	array_change_key_case($Names, CASE_UPPER);


	echo "<pre>";
	print_r($Process);
	echo "</pre>";


	?>
</body>
</html>