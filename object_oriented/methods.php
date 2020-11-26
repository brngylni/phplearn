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
	class NameSurname{

		public function Work(){
			$result = "Mehmet Geylani";
			return $result;
		}
	}

	$object 	=	new NameSurname;
	$result 	=	$object->Work();

	echo $result;


	?>
</body>
</html>