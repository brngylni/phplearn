<?php
require_once("set.php");
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
	$name 	=	$_POST["username"];
	$password 	= 	$_POST["password"];

	if(($name != "") and ($password != "")){
		$_SESSION["username"] = $name;
		$_SESSION["password"] = $password;
		echo "Welcome " . $name . "<br />";
		echo "<a href='exit.php'>Exit</a>";
	}else{
		echo "Please fill the blanks.<br />";
		echo "<a href='form2.php'>Turn Back to Form</a>";
	}
	?>
</body>
</html>