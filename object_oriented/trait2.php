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
	
		abstract public function show2();
		public function show(){
			$info 	=	"Mehmet Baran ";
			return $info;
		}
	}
	class Trial{
		// We can also change the visibility modifiers...
		use person; 

		public function show2(){

			$info = "123";
			return $info;

		}
		public function definitions(){
			$text = "ibanez";
			return $text;
		}
	}

	$result = new Trial;

	echo $result->name . " " . $result->surname . "<br />";
	echo $result->definitions();
	echo "<br />" . $result->show();

	?>
</body>
</html>