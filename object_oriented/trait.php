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
	trait : It is using to define properties or methods to classes.We can't use the 'const' statement in traits.
	use : It is using to implement any trait to any class.
	*/

	trait person{
		public $name = "Mehmet";
		public $surname = "Geylani";
	}
	trait employee{
		public $ssn = "211-32-3213";
	}
	trait combine{
		use person;
		use employee;
	}


	class Trial{
		use combine;

		public function definitions(){
			$text = "ibanez";
			return $text;
		}
	}

	$result = new Trial;

	echo $result->name . " " . $result->surname . "<br />";
	echo $result->ssn . "<br />";
	echo $result->definitions();

	?>
</body>
</html>