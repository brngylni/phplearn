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
	//Taking a parameter from under-function

	function One($Value1){
		function Two($Value2){
			function Three($Value3){
				echo $Value3;
			}
			Three($Value2);
		}
		Two($Value1);
	}

	One("Mehmet Geylani");



	?>
</body>
</html>