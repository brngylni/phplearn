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
	mkdir() : It is using to create a new folder.It can also return the result as a boolean value.
	*/

	$folder 	=	"folder/Images"; // Better on linux.
	mkdir($folder, 0777);	// We can also specify the chmod settings.



	?>
</body>
</html>