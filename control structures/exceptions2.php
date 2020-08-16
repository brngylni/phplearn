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

	$Value1		=	"Meh1met";
	$Value2		=	0;

	try{
		if ($Value1=="Mehmet"){
			echo "Hi Mehmet, how are you?";
		}else{
			throw new Exception("Who are you?You are not Mehmet!");
			
		}
		echo "This is the last line.<br />"; //If there'd any error , the codes that after "throw" never can work.
		}catch(Exception $Conclusion){
		echo $Conclusion->getMessage();
		}












	?>
</body>
</html>