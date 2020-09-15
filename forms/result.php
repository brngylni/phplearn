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
 
	$NameSurname	=	$_GET['NameSurname']; //We could also use $_REQUEST method.
	$EmailAdress	=	$_GET['EmailAdress'];
	$PhoneNumber	=	$_GET['PhoneNumber'];
	$Gender			=	$_GET['Gender'];
	$Age			=	$_GET['Age'];

	echo "Congratulations " . $NameSurname . ". You have succesfully registered.Here is the your informations : <br />Name Surname : " . $NameSurname . "<br/> Email Adress : " . $EmailAdress . "<br />Phone Number : " . $PhoneNumber . "<br />Gender : " . $Gender . "<br />Age : " . $Age; 

	?>
</body>
</html>