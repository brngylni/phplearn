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
	extension_loaded() 	: It is using to check either the specified php extension installed or not.	
	*/

	//phpinfo(INFO_MODULES);

	$extensionName = "gd";

	if(extension_loaded($extensionName)){
		echo "<b>" . $extensionName . "  </b>has loaded";
	}else{
		echo "<b>" . $extensionName . "</b> hasn't loaded";
	}

	?>
</body>
</html>