<?php
require_once("namespace_example.php");
require_once("namespace_example1.php");
?>
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
		namespace : It is using to create name spaces for classes.We can define classes that has same names with namespace usage.
		*/

		$one = new \FirstClasses\Trial;
		$two = new \SecondClasses\Trial; // We can use the methods or properties of classes that in seperate namespaces with this usage.
		echo $one->info . "<br />";
		echo $two->info;



	?>	
</body>
</html>