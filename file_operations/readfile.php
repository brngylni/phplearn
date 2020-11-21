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
	readfile() 	:	It controls the file or URL content and read's the whole content at once then returns it as an array.It can also provide the download or transfer feature to files. 	
	*/

	 $content 		=	"folder/file.txt";
	 header("Content-Description: File Transfer");
	 header("Content-Type: application/octet-stream");
	 header("Content-Disposition: attachment; filename=".basename($content));
	 header("Content-Transfer-Encoding: binary");
	 header("Express: 0");
	 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	 header("Pragma: public");
	 header("Content-Length: ".filesize($content));
	 ob_clean();
	 flush();
	 readfile($content);

	 



	?>
</body>
</html>