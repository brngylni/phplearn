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
	is_resource() : It is using to check if the specified variable's content is resource or not.Result returns as boolean.	
	*/
	$value = fopen("sample.txt", "a+");


	if(is_resource($value)){
		echo "<br />Content is resource.<br />";
	}else{
		echo "<br />Content isn't resource..<br />";
	}

	fclose($value);


	?>
</body>
</html>