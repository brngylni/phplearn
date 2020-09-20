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
	if(!$_POST){
	?>
	<form action="forms4.php" method="post">
		Name Surname : <input type="text" name="NameSurname"><br />
		Phone Number : <input type="text" name ="PhoneNumber"><br />
		E-Mail Adress : <input type="email" name ="EmailAdress"><br />
		Message : <textarea name="Message"></textarea><br />
		<input type="submit" value="Submit!">
	</form>
	<?php
	}else{

		$NameSurname	=	$_POST["NameSurname"];
		$PhoneNumber	=	$_POST["PhoneNumber"];
		$EmailAdress	=	$_POST["EmailAdress"];
		$Message		=	$_POST["Message"];

		echo "Name Surname : " . $NameSurname . "<br />";
		echo "Phone Number : " . $PhoneNumber . "<br />";
		echo "Email Adress : " . $EmailAdress . "<br />";
		echo "Message : " . $Message . "<br />";

	}
	?>
</body>
</html>