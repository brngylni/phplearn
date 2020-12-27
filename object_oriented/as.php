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
	as : It is using to change the access modifiers and assign a nickname to a class.
	*/
	
	trait person{
 		public $name = "Mehmet";
		public $surname = "Geylani";
	
		public function show(){
			$info 	=	"Mehmet Baran ";
			return $info;
		}
	}
	trait employee{
		public $ssn = "211-32-3213";

		public function show(){
			$info = $name . "<br />" . $ssn;
			return $info;
		}
	}

	class Trial{
		use person, employee {person::show insteadof employee; person::show as newShow;}

		public function definitions(){
			$text = "ibanez";
			return $text;
		}
	}

	$result = new Trial;

	echo $result->name . " " . $result->surname . "<br />";
	echo $result->ssn . "<br />";
	echo $result->definitions();
	echo "<br />" . $result->newShow();

	?>
</body>
</html>