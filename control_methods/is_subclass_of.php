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
	is_subclass_of() 	: It is using to check either the specified class has inheritated classes or not.
	*/

	class Dad{
		public  $message = "I am dad";

		public function print(){
			echo $this->message;
		}
	}
	class Leaf extends Dad{

		public function print(){
			$this->message = "I am child";
			Parent::print();
		}
	}

	$object1 = new Dad;
	$object2 = new Leaf;


	if(is_subclass_of($object2, "Dad")){
		echo $object2->print() . "<br />" . $object1->message;
	}else{
		echo $object1->print();
	}

	?>
</body>
</html>