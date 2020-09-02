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
	//Defining a static variable in a function.

	function One(){
		$Number = 0;
		$Number = $Number + 1;

		echo "Number value : " . $Number . "<br />";
	}

	One();
	One();
	One();
	One();
	One();

	function Two(){
		static $Number = 0;
		$Number = $Number+1;

		echo "Number value : " . $Number . "<br />";
	}
	echo "<br /><br />This is a function with static variable.<br /><br />";


	Two();
	Two();
	Two();
	Two();
	Two();

	?>
</body>
</html>