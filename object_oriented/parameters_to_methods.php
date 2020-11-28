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

	class Trial{
		public function test($name, $surname){
			$namesurname 	=	$name. " " . $surname;
			return $namesurname;
		}
	}

	$object 	=	new Trial;
	echo $object->test("Mehmet", "Geylani");

	?>
</body>
</html>