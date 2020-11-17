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
		$folder 	=	"D:/xampp/htdocs/phplearn/*.{rar,txt}";
		
		$search 	=	glob($folder , GLOB_BRACE); // Specified searching structure.

		echo "<pre>";
		print_r($search);
		echo "</pre>";

	?>
</body>
</html>