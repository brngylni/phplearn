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

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	?>
	<a href="session_destroy.php">Delete Sessions</a>
</body>
</html>