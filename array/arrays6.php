<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Learning PHP</title>
</head>
<body>
	<?php

	//Changing a data which belongs to any index(key) in arrays.

	 $Names = array("Mehmet" , "Baran" , "Geylani" , "Lang" => "PHP");
	 $Names["2"] = "Kara"; //We changed the data. 

	 echo "<pre>";
	 print_r($Names);
	 echo "</pre>";


	 //Also we can change the datas in predefined indexes.

	 $Names["Lang"] = "HTML5";

	 echo "<pre>";
	 print_r($Names);
	 echo "</pre>";

	 //Furthermore we can make it multiple times.


	?>
</body>
</html>

	