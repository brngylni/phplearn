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

	($Process	=	function($Name="", $Surname=""){
		echo $Name . " " . $Surname;
	})("Baran", "Kara");

	echo "<br />";
	function Process($Name, $Surname){
		echo $Name . " " . $Surname;
	}

	Process("Mehmet", "Geylani")

	?>
</body>
</html>