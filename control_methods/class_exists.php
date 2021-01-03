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
	class_exists() 	: It is using to check either the specified class exists or not.It returns the result as boolean.
	*/

	class Trial{
		public $name = "baran";

		public function print(){
			echo $name;
		}
	}

	if(class_exists("Trial")){
		echo "Yes";
	}else{
		echo "No";
	}

	?>
</body>
</html>