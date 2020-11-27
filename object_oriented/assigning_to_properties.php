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

	class Trial{

		public $name 	=	"Mehmet";
		public $surname = "Kara";
	}

	$process 	=	new Trial;

	$process->surname 	=	"Geylani";

	echo $process->surname;

	?>
</body>
</html>