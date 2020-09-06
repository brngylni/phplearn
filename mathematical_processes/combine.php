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
	echo "We always have to care about process priority<br />";
	echo "5 + 300 - 55 * 4 / 100 = " . (5 + 300 - 55 * 4 / 100) . "<br />";

	echo "(((5+300) - 55) * 4) / 100 = " . (((5+300) - 55) * 4) / 100;

	//Process priority is valid everytime.It never goes left to right.

	echo "<br />These results are different as we see";

	?>
</body>
</html>