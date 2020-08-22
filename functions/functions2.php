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

	//$GLOBALS["Name"]	=	"MehmetGeylani"; => Another usage.
	$Name	=	"MehmetGeylani";
	define("Name" , "Mehmet Geylani"); //Constants can be called from all areas.

	function Summer(){
		global $Name; //That allows us acces the variable in which global.
		echo $Name;
		echo Name;
	}

	Summer();

	?>
</body>
</html>