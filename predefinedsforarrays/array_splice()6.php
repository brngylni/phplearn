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
$Names2		= array("Merve", "Hakan", "Osman");
array_splice($Names, 1, 6, $Names2);

echo "<pre>";
print_r($Names);
echo "</pre><br />";

?>
</body>
</html>