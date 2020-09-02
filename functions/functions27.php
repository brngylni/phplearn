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

	function One(){
		//Multi-Dimensional functions.

		function Two(){

			function Three(){

				function Four(){

					echo "This is inside of the 'Four' function.<br />";
				}

				echo "This is inside of the 'Three' function.<br />";
			}
			echo "This is inside of the 'Two' function <br />";
		}

		echo "This is inside of the 'One' function<br />";
	}

	// Two(); //It's an error because of the 'Two' function can not be ran directly.It's inside of another function.

	One();
	Two();
	Three();
	Four();
		//We can't call any of them without call it's ancestor.We have to use a hierachical structure.
	?>
</body>
</html>