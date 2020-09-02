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
	yield	:	It is using to return a valur from functions but it not breaks the function.
	*/

	function Process($Start, $Finish){

		while($Start <= $Finish){
			yield $Start;
			$Start++; 
		}
		echo "<br />	Will it write?";
	}

	$Conclusion 	=	Process(1,50000);

	foreach($Conclusion as $Value){
		echo $Value . " ";
	}	

	echo "<br /><br />";

	$MemoryUsage	=	memory_get_usage();
	echo "Memory usage while processing : " . $MemoryUsage . "byte";

	?>
</body>
</html>