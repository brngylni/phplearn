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
	property_exists() 	: It is using to check either the specified class has specified property or not.
	*/

	class Trial{
		public $name = "baran";
	}

	$result = new Trial;

	if(property_exists($result, "name")){
		echo "Yes";
	}else{
		echo "No";
	}
	?>
</body>
</html>