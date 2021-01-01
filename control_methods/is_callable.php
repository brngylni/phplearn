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
	is_callable() : It is using to check if the specified variable's content is callable or not.Result returns as boolean.	
	*/
	$value 	=	1;
	function trial(){

	}

	if(is_callable("trial")){
		echo "Content is callable.<br />";
	}else{
		echo "Content isn't callable..<br />";
	}
	if(is_callable($value)){
		echo "Content is callable.<br />";
	}else{
		echo "Content isn't callable.<br />";
	}
	?>
</body>
</html>