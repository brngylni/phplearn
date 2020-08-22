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
	 //Anonym Functions
	/*
	function Write(){
		echo "Mehmet Geylani";
	}

	Write();
	*/
	

	$Write 	=	function(){ 		//That is an anonym function.
		echo "Mehmet Geylani";
	};

	$Write();
	echo "<br /><br />";

	$Process 	=	array(
			"Mehmet", 
			"Baran", 
			"Geylani",
			"write" =>	function(){
				echo "Mehmet Geylani"; 	//If we define a function in an array, it must be an anonym function.
			}
			 );

	$Process["write"](); //We can call it in this way.
	?>
</body>
</html>