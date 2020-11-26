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

	class NameSurname{
		public $name 	=	"Mehmet";
		public $surname =	"Geylani";
		public const AGE = 20;
	}

	$result 	=	new NameSurname;

	echo $result->name . " " . $result->surname . " " . NameSurname::AGE;
	?>
</body>
</html>