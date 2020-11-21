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
	file() 		:It controls the file or URL content and read's the content line by line then returns it as an array.
	*/

	$content 		=	"https://www.google.com";
	$readcontent 	=	file($content);

	echo "<pre>";
	print_r($readcontent);
	echo "</pre>";

	// We can also access to each line by it's index number.
	echo "<pre>";
	foreach($readcontent as $index => $content){
		echo htmlspecialchars($content) . "<br />";
	}	
	echo "</pre>";

	?>
</body>
</html>