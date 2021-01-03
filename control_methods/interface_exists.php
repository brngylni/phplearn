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
	interface_exists() 	: It is using to check either the specified class has specified interface or not.
	*/

	interface Device{
		public function print();
	}

	if(interface_exists("Device")){
		echo "Yes";
	}else{
		echo "No";
	}
	?>
</body>
</html>