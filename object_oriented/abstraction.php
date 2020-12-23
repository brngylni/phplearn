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
  abstract 		: It is using to convert any class to abstract class.
  interface 	: It is using to convert any class to abstract interface class.
  implements 	: It is using to define / implement any interface to a class.
  
  abstract :
  1. Can contain abstract methods.
  2. Can contaion normal methods.
  3. Can contain properties.
  4. Can contain constants.
  5. public , private or protected modifiers can be defined inside.
  6. Any class can be inheritated from only one abstract.

  interface : 
  1. Can contain abstract methods.
  2. Can contain normal methods(just the public ones).
  3. Can contain constants.
  4. Classes can contain more than one interfaces.
  */

  abstract class Trial{
  	abstract public function define($parameterContent);
  }

  class Test extends Trial{
  	public function define($parameterContent){
  		echo $parameterContent;
  	}
  }

  $result = new Test;
  $result->define("Mehmet");

  ?>
</body>
</html>