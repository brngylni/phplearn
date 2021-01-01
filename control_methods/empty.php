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
	empty() 	:	It is using to check either the specified variable or any array's any index is not defined or defined then returns the result as boolen. 
	*/

	if(empty($name)){
		echo "There isn't such a variable.<br />";
	}else{
		echo "There is a variable that named as \$name<br />";
	}
	$name = "baran";

	if(empty($name)){
		echo "There isn't such a variable.<br />";
	}else{
		echo "There is a variable that named as \$name<br />";
	}
	?>
</body>
</html>