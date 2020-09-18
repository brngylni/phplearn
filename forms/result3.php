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

	$File				=	$_FILES["File"];
	$FileName			=	$File["name"];
	$FileType			=	$File["type"];
	$FileTempName		=	$File["tmp_name"];
	$FileErrSituation	=	$File["error"];
	$FileSize 			=	$File["size"];

	$Path				=	"image/";
	$PathandName 		=	$Path.$FileName;
	if(move_uploaded_file($FileTempName, $Path.$FileName)){
		echo "File succesfully uploaded.<br />";
		echo "İmages name : " . $FileName . "<br />";
		echo "İmages type : " . $FileType . "<br />";
		echo "İmages Temporare Name : " . $FileTempName . "<br />";
		echo "İmages Tempor error Situation : " . $FileErrSituation . "<br />";
		echo "İmages size : " . $FileSize . "<br />";
		echo "<img src= '{$PathandName}'>";
	}else{
		echo "Error! File couldn't uploaded";
	}
	//We uploaded the image that sent from client to 'image' directory.
	?>
</body>
</html>