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
	$Name 					=	$_GET["Name"];
	$Surname				=	$_GET["Surname"];
	$PhoneNumber 			=	$_GET["PhoneNumber"];
	$EmailAdress 			=	$_GET["EmailAdress"];

	echo "Name : " . $Name . "<br />";
	echo "Surname : " . $Surname . "<br />";
	echo "Phone Number : " . $PhoneNumber . "<br />";
	echo "E-Mail Adress : " . $EmailAdress . "<br />";

	?>
</body>
</html>