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

	function Process($Name="Unknown", $Surname="Unknown", $Age="Unknown"){ //50 is the default value of Age parameter.

		$CameName		=	$Name;
		$CameSurname	=	$Surname;
		$CameAge		=	$Age;

		if($CameName != "Unknown"){
			echo "Name that came : " . $Name . "<br />";
		}if($CameSurname != "Unknown"){	
			echo "Surname that came : " . $Surname . "<br />";
		}if($CameAge != "Unknown"){		
			echo "Age that came : " . $Age . "<br />";
		}	

	}

	Process("Mehmet", "Geylani");

	?>
</body>
</html>