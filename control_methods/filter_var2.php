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
	$value = "sadlkşas";
	$value2 = "192.168.1.2";
	$value3 = "2001:0db8:85a3:0000:0000:8a2e:0370:7334";

	

	if(filter_var($value, FILTER_VALIDATE_IP)){
		echo "The value is an IP Address<br />";
	}else{
		echo "The value isn't an ıp adress.The value's type is   : " . gettype($value) . "<br />";
	}	
	if(filter_var($value2, FILTER_VALIDATE_IP)){
		echo "The value is an IPv4 Address . <br />";
	}else{
		echo "The value isn't an ıpv4 adress.The value's type is   : " . gettype($value2) . "<br />";
	}
	if(filter_var($value3, FILTER_VALIDATE_IP)){
		echo "The value is an IPv6 Address . <br />";
	}else{
		echo "The value isn't an ıpv6 adress.The value's type is   : " . gettype($value3) . "<br />";
	}
	?>
</body>
</html>