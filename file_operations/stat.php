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
	stat() 	: It is using to  find whole information about specified file then return it as an array.
	Values : 

	[0] 	: dev 		=>	Interface Number (Usually 2)
	[1] 	: ino 		=>	Node Number (Usually 0)
	[2] 	: mode 		=>	CHMOD- access permitions (Usually 33206)
	[3] 	: nlink 	=>	Connection number. (Usually 1)
	[4] 	: uid 		=>	File owner id. (Usually 0)
	[5] 	: gid 		=>	File owner group id (Usually 0)
	[6] 	: rdev 		=>	Interface type for file node interfaces (Usually 2)
	[7] 	: size 		=> 	File size. (Byte)
	[8] 	: atime 	=>	Access time	(Unix time stamp)
	[9] 	: mtime 	=> 	Modification time (Unix time stamp)
	[10] 	: ctime 	=>	Creation time (Unix time stamp)
	[11] 	: blksize 	=>	IO block size for file system.
	[12] 	: blocks 	=>	512 Byte sized block number that allocated for file.

	*/

	$file 		=	"folder/file.txt";
	$filestat	=	stat($file);

		echo "<pre>";
		print_r($filestat);
		echo "</pre>";
		?>
</body>
</html>