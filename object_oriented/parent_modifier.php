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

		public function information(){
			$text 	=	 "PHP";
			return $text;
		}
	}
	class Two extends One{

		public function information(){
			$text 	=	"7";
			return (parent::information() . $text);	// Of course it can be a  different method name.
		}
	}

	$object 	=	new Two;

	echo $object->information();

		?>
</body>
</html>