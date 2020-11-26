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
	// var provides defining variables that not a property.
	class Trial{
		var $name 		=	"Mehmet";
		
	}

	$process 	=	new Trial;

	echo $process->name;

	?>
</body>
</html>