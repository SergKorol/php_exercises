<HTML>
<HEAD>
<TITLE>opendir</TITLE>
</HEAD>
<BODY>
<?
	$myDirectory = opendir(".");

	while($entryName = readdir($myDirectory)){
		
		if(is_dir($entryName))
			echo '[<b>'.$entryName.'</b>]<br>';
		else
			echo $entryName.'<br>';
	}

	closedir($myDirectory);
	
	
?>
</BODY>
</HTML>