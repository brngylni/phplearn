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

	session_destroy(); 	// It won'r delete the session from browser. It will be deleted automatically on the browser side.
	echo "Sessions deleted.<br />";
	// we can also use unset();
	// unset($_SESSION["username"]);
	// it deletes just one session.
	?>
	<a href="sessions.php">Create Sessions</a>
</body>
</html>