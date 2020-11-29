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

	class One{

		private $name 	= "Mehmet";
		private const SURNAME = "Geylani";	// It will print 1 error because in classes, any error will stop the ru

		private function information(){
			$text 	=	"is a CS student.";
			return $text;
		}
	}

	$object 	=	new One;

	echo $object->name . " " . One::SURNAME . " " . $object->information();

	?>


</body>
</html>