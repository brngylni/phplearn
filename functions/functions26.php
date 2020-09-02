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

	function One(){
		//Multi-Dimensional functions.

		function Two(){

			echo "This is inside of the 'Two' function";
		}

		echo "This is inside of the 'One' function";
	}

	One(); //It prints the only '1'.
		
	?>
</body>
</html>