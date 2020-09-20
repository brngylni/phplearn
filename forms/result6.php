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

	$Name 				=	$_POST["Name"];
	$Surname			=	$_POST["Surname"];
	$EmailAdress		=	$_POST["EmailAdress"];
	$PhoneNumber		=	$_POST["PhoneNumber"];
	$Image 				=	$_FILES["Image"];

	echo "Name : " . $Name . "<br />";
	echo "Surname : " . $Surname . "<br />";
	echo "Phone Number : " . $PhoneNumber . "<br />";
	echo "E-Mail Adress : " . $EmailAdress . "<br />";
	
	$AllValues	=	$_POST;

	echo "<pre>";
	print_r($AllValues);
	echo "</pre>";

	foreach ($AllValues as $key => $value ) {
		 echo $key . " : " .  $value . "<br />";
	}

	echo "<br /><br /><br /><br />";

	foreach ($Image as $imagekey => $imagevalue ) {
		 echo $imagekey . " : " .  $imagevalue . "<br />";
	}

	$Tmpname 		= $Image["tmp_name"];
	$Filename		= $Image["name"];
	$Path			= "image/";
	$PathandName	= $Path.$Filename;
	move_uploaded_file($Tmpname, $PathandName);

	echo "<img src='{$PathandName}'>";

	?>
</body>
</html>