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

		public $name 	= "Mehmet";
		public const SURNAME = "Geylani";	// It will print 1 error because in classes, any error will stop the run

		public function information(){
			$text 	= $this->name . " " . self::SURNAME . " is a CS student."; 	// We have to use $this and self:: keywords to access to properties/data field.
			return $text;
		}
	}

	$object 	=	new One;

	echo $object->information();
	?>


</body>
</html>