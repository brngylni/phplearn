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

//We can also define the length.
array_splice($Names, 1, -1); //It means take 1 element from the beginning and 1 element from the end.

echo "<pre>";
print_r($Names);
echo "</pre><br />";
?>
</body>
</html>

	