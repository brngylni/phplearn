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
	//Recursive Functions

	$Start	=	1;
	echo "İt's a loop.<br />";
	while($Start <=25){
		echo $Start . "<br />";
		$Start++;
	}

	echo "<br />İt's a recursive function.<br />";

	function Process($Number){
		
		if($Number <= 25){
		echo $Number . "<br />";
		Process($Number+1);
	}}

	Process(1);

	?>
</body>
</html>