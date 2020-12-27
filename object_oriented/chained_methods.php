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

	class Format{
		public $text;
		public $style;

		public function text($text){
			$this->text = $text;
			return $this;
		}
		public function color($color){
			$this->style = "color:" . $color . "; ";
			return $this;
		}
		public function size($size){
			$this->style .= "font-size:" . $size . ";";
			return $this;
		}
		public function create(){
			return '<div style="'. $this->style . '"">' . $this->text . "<br /></div>";
		}
	}

	$result = new Format;
	
	echo $result->text("Mehmet Geylani")->color("red")->size("20px")->create();
	echo $result->text("Mehmet Geylani")->color("yellow")->size("25px")->create();
	echo $result->text("Mehmet Geylani")->color("blue")->size("30px")->create();
	echo $result->text("Mehmet Geylani")->color("green")->size("35px")->create();
	echo $result->text("Mehmet Geylani")->color("orange")->size("40px")->create();

	
	?>
<!--	
	<br /><br />
	<div style="color:red; font-size:20px;">Mehmet Geylani</div>
-->

</body>
</html>