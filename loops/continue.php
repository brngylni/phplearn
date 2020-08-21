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
	continue 	:	It is using to skip any step of loop and continue to next process.
	*/

	$Number 	=	1;

	while($Number < 50){
			$Number++;

		if(($Number > 10) and ($Number <= 20)){
			continue; //If the condition is true, it will skip the steps below.
		}else{
		echo $Number . "<br />";
		
	}
	}

	?>
</body>
</html>