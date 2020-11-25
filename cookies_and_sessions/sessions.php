<?php 
session_start();
?>
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
	session_start() 	: It is using to start and trace the sessions.
	session_destroy() 	: It is using to delete the sessions.
	*/

	$_SESSION["username"] 	=	"Mehmet";
	$_SESSION["surname"] 	=	"Geylani";	// It will create only one session on browser.Data's will be memorized on temp directory.
	$_SESSION["phone"] 	=	"05423139870";

	echo "Sessions created.<br />"


	?>
	<a href="sessionread.php">Read Sessions.</a>
</body>
</html>