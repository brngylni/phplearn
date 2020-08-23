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

	function Process($Name, $Surname, $DOB, $City, $Job, $Age, $Gender){
		$CameName		=	$Name;
		$CameSurname	=	$Surname;
		$CameDOB		=	$DOB;
		$CameCity		=	$City;
		$CameJob		=	$Job;
		$CameAge		=	$Age;
		$CameGender		=	$Gender;

		$PersonCard		=	"Name : " . $CameName . "<br />" .
							"Surname : " . $CameSurname . "<br />" .
							"Date Of Birth : : " . $CameDOB . "<br />" .
							"City : " . $CameCity . "<br />" .
							"Job : " . $CameJob . "<br />" .
							"Age : " . $CameAge . "<br />" .
							"Gender : " . $CameGender . "<br />";

							echo $PersonCard;
	}

	Process("Mehmet", "Geylani", "10.04.2000", "Ankara", "Student", "20", "Male");

	echo "<br /><br />";

	Process("Baran", "Kara", "10.04.2000", "İstanbul", "Student", "8", "Male");

	echo "<br /><br />";

	Process("Ali", "Yılmaz", "10.04.2000", "Trabzon", "Student", "8", "Male");
	?>
</body>
</html>