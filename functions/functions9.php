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

	function Process($Name, $Surname, $Age=50){ //50 is the default value of Age parameter.

		echo "Name that came : " . $Name . "<br />";
		echo "Surame that came : " . $Surname . "<br />";
		echo "Age that came : " . $Age . "<br />";


	}

	Process("Mehmet", "Geylani", 20);

	?>
</body>
</html>