<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>If</title>
</head>
<body>
	<?php
	/*
		
		if 	:	Eğer
		elseif 	: Değilse eğer
		else 	:	Değilse

	Structure :
	if (Conditions) {

	code blocks

	}elseif(Conditions) {

	code blocks
	
	]else {

		code blocks
	}
	*/	

	$Clock		=	3;
	if ($Clock <= 6) and ($Clock >= 0) { //If we have more than one conditions, we must use the brackets for each.

		echo "Good Night";
	}






	?>
</body>
</html>