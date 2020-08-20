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

	$Names = array("Mehmet", "Baran", "Kara", "Geylani", "Ali",array("Aslı", "Hande", "Meryem", "Banu", "Derya") , "Veli", "Kerim");

	print_r($Names);

	echo "<br /><br />";

	foreach($Names as $Content){
		if(is_array($Content)){
			echo "There is an array inside of another array<br />";
			foreach($Content as $Content2){
				echo $Content2 . "<br />";
			} 
		}else{
			echo $Content . "<br />";
		}
	}

	?>
</body>
</html>