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
	get_included_files() : It finds the included files.It returns the path and names as an array.
	*/

	echo "<pre>";
	print_r(get_included_files()); // This line'd return the current file's path.Because there is no included file.
	echo "</pre>";


	?>
</body>
</html>