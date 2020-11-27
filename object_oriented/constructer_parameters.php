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
	
	class Trial{
		public function __construct($hostInfo="localhost", $dbUserName, $dbPassword, $dbName){ // We can assign default values to parameters.
			$text 	=	"İncoming Host Info : " . $hostInfo . "<br />Incoming Database Username : " . $dbUserName . "<br />Incoming Database Password : " . $dbPassword . "<br />Incoming Database Name : " . $dbName;
			return $text;
		}
	}
	$process 	=	new Trial("localhost", "root", "root", "Users");




	?>
</body>
</html>