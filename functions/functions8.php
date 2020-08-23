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

							return $PersonCard;
	}

	$Process1 	=	Process("Mehmet", "Geylani", "10.04.2000", "Ankara", "Student", "20", "Male");

	$Process2 	=	Process("Baran", "Kara", "10.04.2000", "İstanbul", "Student", "8", "Male");

	$Process3 	=	Process("Ali", "Yılmaz", "10.04.2000", "Trabzon", "Student", "8", "Male");

	echo $Process2;
	echo "<br /><br /><br />";
	echo $Process3;
	echo "<br /><br /><br />";
	echo $Process1;




	?>
</body>
</html>