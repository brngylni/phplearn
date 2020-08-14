<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>switch case</title>
</head>
<body>
	<?php
	/*

	switch		= It using to start a condition	
	case 		= It using to control a condition
	break 		= It using to end the controlling of condition
	default 	= Conclusion of negation of conditions.
	
	Structure :

	switch(condition){
	
		case Control Statement:
			Code Blocks
		break;
		default:
			Code Blocks					
		
	} 
	*/

	$Value = 112;

	switch($Value){
		case $Value < 20:
			echo "First condition became valid";
		break;	
		default:
			echo "Condition became unvalid and code block worked";




	}


	?>
</body>
</html>