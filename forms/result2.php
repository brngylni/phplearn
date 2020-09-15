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
	$NameSurname 	=	$_POST['NameSurname'];
	$Hobbies 		=	$_POST['Hobbies'];

	echo "Name Surname : " . $NameSurname . "<br />Hobbies : <br />";

	foreach($Hobbies as $Info){
		echo $Info . "<br />";
	}


	?>
</body>
</html>