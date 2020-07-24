<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Splice()</title>
</head>
<body>
<?php

$Names		=	array("Mehmet", "Baran", "Geylani", "Kara", "Kerim", "Rüstem", "Berfin", "Çiğdem");

array_splice($Names, 2, 4, "RECEP" );

echo "<pre>";
print_r($Names);
echo "</pre><br />";

?>
</body>
</html>