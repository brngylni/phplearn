<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>ternary</title>
</head>
<body>
	<?php
	/*
	?:		=	ternary operator (trinity operator)
	Structure:
	(Condition or conditions) ? Valid Statement : Unvalid Statement	
		
		WE can define it in a variable.
	*/

		$Value			=	"Mehmet";
		$Conclusion		=	($Value=="Mehmet") ? "True" : "False";

		echo $Conclusion . "<br /><br />";


		echo ($Value=="Mehmet") ? "True" : "False";
	?>
</body>
</html>