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
	settype() 	:	It is using to change/define any variable content's data type.
	*/

	 $Value 		=	"8";
	 $DataType		=	gettype($Value);

	 echo "The first version of content : " . $Value . "<br />";
	 echo "The data type of first version of content : " . $DataType . "<br /><br />";

	 settype($Value, "integer");

	 $LastDataType		=	gettype($Value);

	 echo "The final version of content : " . $Value . "<br />";
	 echo "The data type of final version of content : " . $LastDataType . "<br />";


	?>
</body>
</html>