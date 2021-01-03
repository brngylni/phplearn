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
	function_exists() 	: It is using to check either the specified function exists or not.It returns the result as boolean.
	*/

	function sumation($number1, $number2){
		return ($number1+$number2);
	}

	if(function_exists("sumation")){
		echo "Yes";
	}else{
		echo "No";
	}

	?>
</body>
</html>