<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>array_multisort()</title>
</head>
<body>
	<?php
	/*
	array_multisort()	:	It is using to sort advanced the elements of one or more than one arrays multi-directionally
	SORT_ASC 		:	From "A" to "Z" / smaller to bigger
	SORT_DESC		:	From "Z" to "A" / bigger to smaller
	SORT_REGULAR	:	Standard sorting (Default)
	SORT_NUMERİC	:	Numeric Sorting
	SORT_STRING		:	Alphanumeric sorting (String)
	SORT_NATURAL		:	Alphanumeric sorting (String) (Natural)

	Key names will be held if we've defined.
	*/


	$Values 	=	array(1, 23, 9600, -7, 3);

	echo "<pre>";
	print_r($Values);
	echo "</pre>";


	array_multisort($Values, SORT_REGULAR);


	echo "<pre>";
	print_r($Values);
	echo "</pre>";


	?>
</body>
</html>