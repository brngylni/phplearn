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
	is_a() 	: It is using to check either the check the object instance of the specified class.
	*/

	class Trial{

	}

	$object = new Trial;

	if(is_a($object, "Trial")){
		echo "Yes";
	}else{
		echo "No";
	}

	?>
</body>
</html>