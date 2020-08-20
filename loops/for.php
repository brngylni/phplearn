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
	for 	:	It starts a loop proces.
	
	Structure :
	for(Value; Condition; İncrease or Decrease){
		Code Blocks
	}
	*/

	$Value = 1;

	while($Value <= 10){
		echo $Value . "<br />";
		$Value++;
	}
	echo "<br />" ;
	for($Value = 1; $Value <= 10; $Value++){
		echo $Value . "<br />";
	}

	?>
</body>
</html>