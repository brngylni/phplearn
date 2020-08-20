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
	break 	:	It is using to finish loop the process
	*/

	$Start = 1;

	do{
		echo  $Start . "<br />";
		$Start++;
		if($Start > 40){
			break;
		}
	}while($Start <= 1000)

	?>
</body>
</html>