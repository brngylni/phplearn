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
		return 	: It is using to return a value from function.
		*/

		function Process(){
			$NameSurname 	=	"Mehmet Geylani";

			return ($NameSurname);
		}

		$Conclusion 	=	Process();
		echo $Conclusion . "<br /><br />";

		if ($Conclusion == "Mehmet Geylani"){
			echo $Conclusion . "is an engineering student.";
		}else{
			echo "Person couldn't recognized.";
		}

	?>
</body>
</html>