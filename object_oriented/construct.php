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
	__construct() 	: 	It is using to define a constructer method.
	*/

	class Trial{
		public function __construct(){
			echo "Class worked<br />";		// This line will be printed although we didn't call it.
		}

		public $name = "Mehmet";
		public $surname = "Geylani";

		public function Write(){
			$text 	=	"PHP";
			return $text;
		}
	}
	
	$process = new Trial;
	echo $process->name . " " . $process->surname . "<br />";


	?>
</body>
</html>