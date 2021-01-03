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
	method_exists() 	: It is using to check either the specified class has specified method or not.
	*/

	class Trial{

		public $name = "baran";

		public function print(){
			echo $name;
		}
	}

	$result = new Trial;

	if(method_exists($result, "print")){
		echo "Yes";
	}else{
		echo "No";
	}

	?>
</body>
</html>