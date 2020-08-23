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

	$One	=	"Mehmet Geylani";

	function TestFunction($One){
		$One	=	"Hi.My name is : " . $One;
		echo $One;
	}

	echo $One . "<br />";

	TestFunction($One);

	echo "<br /><br /><br /><br /><br />";
////////////////////////////////////////////////////////////////
	$Two	=	"Baran Kara";

	function DemoFunction(&$Two){ //This "&" sign allows us change the main $Two variable.
		$Two	=	"Hi. My name is : " . $Two;
		echo $Two;
	}

	DemoFunction($Two);
	
	echo "<br />" . $Two . "<br />";
	?>
</body>
</html>