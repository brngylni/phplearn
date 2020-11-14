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
	include() 		: It is using to include any specified PHP file to PHP file. (It doesn't check whether the file already included or not.If there would any error code, codes keeps on reading.)
	
	include_once()	: It is using to include any specified PHP file to PHP file. (It checks whether the file already included or not .If there would any error code, codes keeps on reading.)
	
	require() 		: It is using to include any specified PHP file to PHP file. (It doesn't check whether the file already included or not.If there would any error code, codes stops.)

	require_once() 	: It is using to include any specified PHP file to PHP file. (It checks whether the file already included or not .If there would any error code, codes stops.)
	*/

	echo "First Line.<br />";
	include("file_for_include.php");
	echo "Last Line.";



	?>
</body>
</html>