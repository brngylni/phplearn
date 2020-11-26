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

	$_SESSION["user"] 	=	array("name" => "Baran", "surname" => "Geylani", "mail" => "barankara5@gmail.com", "phone" => "05423139870");
	$_SESSION["checkout"] 	= array("id" => 12, "total" => 1200.00, "currency" => "TL", "payment method" => "credit");

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	?>
</body>
</html>