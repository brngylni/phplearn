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
	glob() 	: It is using to control the specified folder content according to specified structure then create an array and fill it with the file names and extensions that in folder.
	Parameters : 
		GLOB_MARK 		:	It lists all folder and files in specified folder.Also it can add "\" to every folder name's endings
		GLOB_NOSORT 	:	It lists all folder and files in specified folder.Also dont sorts the folders and files.
		GLOB_NOCHECK 	:	It lists the whole file and folders that matches with searching structure.If there is no matches, it returns the searching structure.
		GLOB_ONLYDIR 	:	It lists the all folders in which specified folder and matches with searching structures
		GLOB_BRACE	 	:	It lists the all folders and files in which specified folder and matches with extended searching structures.
		GLOB_ERR	 	:	It lists the all folders and files in which specified folder and matches with searching structures. If there is any errors, process would be terminated.(Folder that can not be read etc.)
	*/

		$folder 	=	"*";
		
		$search 	=	glob($folder);

		echo "<pre>";
		print_r($search);
		echo "</pre>";
	?>
</body>
</html>