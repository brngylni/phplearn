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
	eval() : It provides detection as a PHP code to any content.It returns the outputs. 
	*/

	$text = 'echo "Mehmet Geylani";';
	$content = "PHP";
	$text2 = "Mehmet Geylani";
	$text3 = 'Lecture : $content and student : $text';



	eval($text);
	echo "<br />";
	eval("\$result = \"$text3\";");

	echo $result;


	?>
</body>
</html>