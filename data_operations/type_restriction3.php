<?php
declare(strict_types=1);
?>
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
	declare(strict_types=1)		:	It specifies the rule structure of whole codes in code file.
	*/

	function Trial(string $Name, string $Surname, int $Age):array{ 
		$Bind	=	array($Name, $Surname, $Age);
		return $Bind;
	}

	$Conclusion		=	Trial("Mehmet", "Geylani", 20); 

	echo "<pre>";
	print_r($Conclusion);
	echo "</pre>";
	?>
</body>
</html>