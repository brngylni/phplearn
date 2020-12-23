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
	// We must define the abstract functions on inhertated classes.
	abstract class Theme{
		abstract public function header($backgroundColor, $headerLogo, $headerBanner);
		abstract public function body($content);
		abstract public function footer($copyText);
	}
	class Top extends Theme{
		public function header($backgroundColor, $headerLogo, $headerBanner){

		}
		public function body($content){

		}
		public function footer($copyText){

		}
	}
	?>
</body>
</html>