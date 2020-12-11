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

	class One{
		public function Trial(){
			return "Mehmet";
		}
	}
	class Two extends One{
		public function Trial(){
			return "Baran";
		}
	}
	class Three extends Two{
		public function Trial(){
			return "Geylani";
		}
	}
	class Four extends Three{
		public function Trial(){
			return "Kara";
		}
	}

	final class Five extends Four{ // This means the last class is Five.No classes can inheritate from Five.
		final public function Trial(){ // It can be used for methods.It provides the Trial method can not be created again on inheritated classes.
			return "Bike";
		}
		public function array(){
			$list = array("One" => One::Trial(), "Two" => Two::Trial(), "Three" => Three::Trial(), "Four" => Four::Trial(), "Five" => $this->Trial());
			return $list;
		}
	}

	$result = new Five();
	echo "<pre>";
	print_r($result->array());
	echo "</pre>";
	?>
</body>
</html>