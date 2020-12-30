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
	spl_autoload_register() : It is using to define the process the will be executed when there is no such a class.
	*/
	function autoRun($value){
		$fileName = $value . ".php";
		require_once($fileName);
	}

	spl_autoload_register("autoRun");
	$who = new spl;
	echo $who->informations();

	?>
</body>
</html>