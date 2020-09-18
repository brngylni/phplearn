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
	move_uploaded_file() 	: It is using to upload any file to specified directory.
	*/
	?>
	<form action ="result3.php" method="post" enctype="multipart/form-data">
		The file that will be uploaded : <input type="file" name="File"><br />
		<input type="submit" value="Send the file!">
	</form>
</body>
</html>