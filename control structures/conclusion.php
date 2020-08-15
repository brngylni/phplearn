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

	$Name		=	$_REQUEST["UserName"] ?? "ERROR<br />";
	$Surname	=	$_REQUEST["UserSurname"] ?? "ERROR<br />";

	echo "Name value that came from form :" . $Name . "<br />";
	echo "Surname value that came from form :" . $Surname . "<br />";

	?>
</body>
</html>