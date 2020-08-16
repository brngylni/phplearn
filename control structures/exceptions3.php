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
	try 			:	It is using for the codes that may fail.
	catch 			:	It is using for the codes that will work when there is a failure
	finally			: 	It is using for the codes that will work even if there isn't any failure.
	throw			: 	It is using in the exceptional situations for the codes that may fail. 
	Exception 		:	It is using to call the predefined basic class which defined for the all exceptions.
	getMessage() 	:	It is using to assign the message which created for the exceptions.
	
	Structure:

	try{
		Code Blocks
		
		throw new Exception(Message);

	}catch(Exception Message Assign){
		Code Blocks
	}finally{
		Code Blocks
	}
	*/


	try{

		$Value1		=	100;
		$Value2		=	0;

		if ($Value2 == 0){
			throw new Exception("Attempting to perform an incorret operation.");
		}

		echo "The conclusion of the division process :" . $Value1 / $Value2;

	}catch(Exception $Conclusion){
		echo $Conclusion->getMessage();

	}finally{
		echo "<br /><br />I am finally.I always work.";
	}












	?>
</body>
</html>