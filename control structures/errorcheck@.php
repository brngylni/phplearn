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
	/* @ 	:	Error code checking operator*/


	echo @$Trial; 	// "@" sign blocks the error code displaying and reporting the log to error.log file.

	//@$ Trial2 = "Mehmet Geylani"; // "@" sign cant block the fatal errors.

	@trim(); //Also it can be used on Warning Errors.


	?>
</body>
</html>