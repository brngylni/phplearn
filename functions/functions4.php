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

	$Value	=	"Mehmet";

	
	if($Value == "Mehmet"){	
		function Summer(){
			echo "Hi Mehmet Geylani";
		}
	}else{									//This statement wouldn't return any error even "Summer" used twice.

		function Summer(){
			echo "Hi Mehmet Geylani";
		}
	}
	Summer();
	


	?>
</body>
</html>