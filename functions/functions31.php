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

	//Defining parameter to multi-dimensional functions from inside a function.
	function One($Name){

		function Two($Surname){

			echo $Surname . " ";

		}
		echo $Name . " ";
		Two("Geylani");

	}

	One("Mehmet");
	?>
</body>
</html>