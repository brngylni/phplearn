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

	//Defining parameters to multi-dimensional function.

	function One($Name, $Surname){

		function Two($Job, $Age){

		return "Job : " . $Job . "<br /> Age : " . $Age . "<br />";


		}

		return "Name Surname : " . $Name . " " . $Surname . "<br />";
	}

	$NameSurname	=	One("Mehmet Baran", "Geylani");
	$AgeJob			=	Two("CE Student", 20);

	echo $NameSurname;
	echo $AgeJob;
	?>
</body>
</html>