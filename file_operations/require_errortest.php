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

	
	echo "First Line <br />";
	require("file_for_include_errortest.php");
	echo "<br />Last Line"; 	// It wouldn't read this line because of the error above.

	?>
</body>
</html>