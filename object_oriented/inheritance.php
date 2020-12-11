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
		extends 	:	We use this keyword when we want to create a class from another class called inheritance.Inheritance provides the second class  can have all of the properties of first class.
		final 		:	It modifies the last inheritated class.It can also using for methods.If final used for methods, same method name can't be used on associated classes.
		*/

		class Trial1{
			protected $name 	=	"Mehmet";
		}
		class Trial2 extends Trial1{

			function return(){
				return $this->name;
			}
		}

		$result = new Trial2();
		echo $result->return();

	?>
</body>
</html>