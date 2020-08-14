<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>switch without braackets</title>
</head>
<body>
	<?php
	/*
	Structure 	:

	switch():
		case Condition:
			code blocks
		break;
		default:
			code blocks
		endswitch;
	*/


		$Value	=	8;

		switch($Value):
			case $Value == 8:
				echo "Code block worked";
				break;
		endswitch;


	?>
</body>
</html>