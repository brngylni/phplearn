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

	function Process($HireLimit=0){
		echo "One shot checkout amount : 1000 USD<br />";
		if($HireLimit==0){
			return;
		}
		echo "2 installment checkout amount : 1010 USD<br />";
		if($HireLimit==2){
			return;
		}
		echo "3 installment checkout amount : 1020 USD<br />";
		if($HireLimit==3){
			return;
		}
		echo "4 installment checkout amount : 1030 USD<br />";
		if($HireLimit==4){
			return;
		}
		echo "5 installment checkout amount : 1040 USD<br />";
		if($HireLimit==5){
			return;
		}
		echo "6 installment checkout amount : 1050 USD<br />";
		if($HireLimit==6){
			return;
		}
		echo "7 installment checkout amount : 1060 USD<br />";
		if($HireLimit==7){
			return;
		}
		echo "8 installment checkout amount : 1070 USD<br />";
		if($HireLimit==8){
			return;
		}
		echo "9 installment checkout amount : 1080 USD<br />";
		if($HireLimit==9){
			return;
		}
		echo "10 installment checkout amount : 1090 USD<br />";
		if($HireLimit==10){
			return;
		}
		echo "11 installment checkout amount : 1100 USD<br />";
		if($HireLimit==11){
			return;
		}
		echo "12 installment checkout amount : 1110 USD<br />";
	}

	Process();
	?>
</body>
</html>