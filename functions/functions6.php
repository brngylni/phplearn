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

	function Process(){
		$Name 		=	"Mehmet";
		$Surname 	=	"Geylani";
		$City 		=	"Ankara";
		$Age		=	"20";
		$Job		=	"Student";

		return array($Name, $Surname, $City, $Age, $Job);
	}

	$Conclusion		=	Process();

	echo "<pre>";
	print_r($Conclusion);
	echo "</pre><br />";

	echo "Name : " . $Conclusion[0] . "<br />";
	echo "Surname : " . $Conclusion[1] . "<br />";
	echo "City : " . $Conclusion[2] . "<br />";
	echo "Age : " . $Conclusion[3] . "<br />";
	echo "Job : " . $Conclusion[4] . "<br />";


	$Process	=	function(){
		$Name 		=	"Mehmet";
		$Surname 	=	"Geylani";
		$City 		=	"Ankara";
		$Age		=	"20";
		$Job		=	"Student";

		return array($Name, $Surname, $City, $Age, $Job);
	};

	$Conclusion2 	=	$Process();

	echo "<pre>";
	print_r($Conclusion2);
	echo "</pre>";
	
	echo "Name : " . $Conclusion2[0] . "<br />";
	echo "Surname : " . $Conclusion2[1] . "<br />";
	echo "City : " . $Conclusion2[2] . "<br />";
	echo "Age : " . $Conclusion2[3] . "<br />";
	echo "Job : " . $Conclusion2[4] . "<br />";

	?>
</body>
</html>