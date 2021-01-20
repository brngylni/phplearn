<?php
	ob_start();
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
	/*
	ob_get_contents() 	: It fetchs the content of output buffer then returns it
	*/

	echo "Mehmet Geylani";

	$content = ob_get_contents();

	echo $content;
	?>
</body>
</html>