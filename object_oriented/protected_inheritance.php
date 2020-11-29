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

		protected $name 	=	"Mehmet";
		protected $surname 	=	"Geylani";

		public function information(){
			$text 	=	$this->name . " " . $this->surname;
			return $text;
		}
	}

	class Two extends One{

		public function information(){
			$text 	=	$this->name . " " . $this->surname;
			return $text;
		}

	}

	$object 	=	new Two;

	echo $object->information();

	?>
</body>
</html>