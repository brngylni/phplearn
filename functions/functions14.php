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

	function MoneyUnit($Unit, $Amount){
		if($Unit == "Turkish Lira"){
			$ExchangeRate	=	1;
		}elseif($Unit == "USD"){
			$ExchangeRate	=	7.50;	
		}elseif($Unit=="Euro"){
			$ExchangeRate	=	8.50;
		}else{
			$ExchangeRate	=	0;
		}
		return Calculate($ExchangeRate, $Amount);
	}

	function Calculate($ExchangeRateInfo, $AmountInfo){
		$Conclusion		=	$ExchangeRateInfo * $AmountInfo;
		echo "Turkish Lira equivalent of the entered value is : " . $Conclusion;

	}

	MoneyUnit("USD", 1000);
	?>
</body>
</html>