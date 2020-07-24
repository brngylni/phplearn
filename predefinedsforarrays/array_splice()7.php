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

$Names		=	array("A1" =>"Mehmet", "A2" => "Baran","A3" => "Geylani","A4" => "Kara","A5" => "Kerim","A6" => "Rüstem","A7" => "Berfin","A8" => "Çiğdem");
$Names2		=	array("B1" =>"Merve","B2" => "Hakan", "B3" =>"Osman");
array_splice($Names, 1, 6, $Names2);
//The key names in first array are valuable.They will be protected.
//But the key names in second array are not valuable.Those will not be protected.



echo "<pre>";
print_r($Names);
echo "</pre><br />";

?>
</body>
</html>