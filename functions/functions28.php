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

		echo "Job : " . $Job . "<br /> Age : " . $Age . "<br />";


		}

		echo "Name Surname : " . $Name . " " . $Surname . "<br />";
	}

	One("Mehmet Baran", "Geylani");
	Two("CE Student", 20);
	?>
</body>
</html>