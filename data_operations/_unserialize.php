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

	$Informations		=	'a:4:{s:4:"Name";s:6:"Mehmet";s:7:"Surname";s:7:"Geylani";s:4:"City";s:6:"Ankara";s:3:"Age";i:20;}';

	echo "<pre>";
	echo $Informations;
	echo "</pre><br /><br />";

	$Conclusion		=	unserialize($Informations);

	echo "<pre>";
	print_r($Conclusion);
	echo "</pre><br /><br />";
	?>
</body>
</html>