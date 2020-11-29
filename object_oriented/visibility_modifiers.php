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
	public 		:	Public modifier imlpies that is accessible from everywhere.
	private 	:	Private modifier implies that is just accessible from the inner scope of class.
	protected 	:	Protected implies that is accessible from just the inner scope of class and the classes which derived from that class.
	*/

	class One{

		public $name 	= "Mehmet";
		public const SURNAME = "Geylani";

		public function information(){
			$text 	=	"is a CS student.";
			return $text;
		}
	}

	$object 	=	new One;

	echo $object->name . " " . One::SURNAME . " " . $object->information();

	?>
</body>
</html>