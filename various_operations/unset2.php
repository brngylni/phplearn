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

	$_SESSION["user"] = "Mehmet";
	$_SESSION["email"] = "barankara5@gmail.com";

	echo $_SESSION["user"] . "<br />";
	echo $_SESSION["email"] . "<br />";


	unset($_SESSION["user"]);
	unset($_SESSION["email"]);

	echo $_SESSION["user"] . "<br />";
	echo $_SESSION["email"] . "<br />";

	?>
</body>
</html>