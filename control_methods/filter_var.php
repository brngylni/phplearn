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
	filter_var() 	:	It is using to filter the content according to given parameter.It is also checks either the content is appropriate to filter or not.It returns the process result as boolean data type and the filtered content.
	
	FILTER_VALIDATE_BOOLEAN 			: It is using to check either the specified content is boolean or not.(Result is always boolean.)
	FILTER_VALIDATE_INT 				: It is using to check either the specified content is integer or not.(Result is always boolean.) 
	FILTER_VALIDATE_IP 					: It is using to chech either the specified content' format is IP address or not.(If it's successful, returns the content, if not, doesn't return anything) 
		FILTER_FLAG_IPV4				:Similar with VALIDATE_IP but just checks also either the content is appropriate to IPV4 format.
		FILTER_FLAG_IPV6				: IPV6 version of IPV4
	FILTER_VALIDATE_EMAIL 				: It is using to check either the specified content's format is email or not.Returns the content if it's successful.
	FILTER_VALIDATE_URL 				: It is using to check either the specified content is in URL format or not.Returns the content if it's successful.
		FILTER_FLAG_SCHEME_REQUIRED		: Similar with URL but checks also either the content is appropriate to RFC(Request for Comment) standart or not.
		FILTER_FLAG_HOST_REQUIRED		: Similar with URL but checks also either the content is appropriate to HOST(domain) standart or not.
		FILTER_FLAG_PATH_REQUIRED		: Similar with URL but checks also either the content is PATH address or not.
		FILTER_FLAG_QUERY_REQUIRED		: Similar with URL but checks also either the content is QUERY address or not.
	*/

		$value = "Mehmet Geylani was born in 2000";

		if(filter_var(variable)r($value, FILTER_VALIDATE_BOOLEAN)){
			echo "The value is boolean";
		}else{
			echo "The value isn't boolean.The value's type is   : " . gettype($value);
		}
		$value = "Mehmet Geylani was born in 2000";

		if(filter_var(variable)r($value, FILTER_VALIDATE_INT)){
			echo "The value is integer";
		}else{
			echo "The value isn't integer.The value's type is   : " . gettype($value);
		}


	?>
</body>
</html>