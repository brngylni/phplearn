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

		public $name 	=	"Mehmet";
	}
	class Two extends One{		// We cab use $this parameter to access parent properties.

		public function method($name){
			return $name;
		}



	}

	$object 	=	new Two;
	echo $object->name . "<br />";		
	echo $object->method($object->name);
	?>
</body>
</html>