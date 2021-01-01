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
	isset() 	: It is using to check either the specified variable or any index of any array exists or not then returns the result as a boolean.
	*/

	if(isset($name)){
		echo "\$name Variable is defined.<br />";
	}else{
		echo " \$name Variable is not defined.<br />";
	}

	$name = "Baran";
	echo " \$name = baran<br />";
	if(isset($name)){
		echo "\$name Variable is defined.<br />";
	}else{
		echo " \$name Variable is not defined.<br />";
	}

	?>
</body>
</html>