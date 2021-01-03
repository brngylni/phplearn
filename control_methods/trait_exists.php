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
	trait_exists() 	: It is using to check either the specified class uses specified trait or not.
	*/

	trait sample{
		public $name  = "baran";
	}

	if(trait_exists("sample")){
		echo "Yes";
	}else{
		echo "No";
	}


	?>
</body>
</html>