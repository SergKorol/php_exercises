<HTML>
<HEAD>
<TITLE>fread</TITLE>
</HEAD>
<BODY>
<?
	$myFile = fopen("data.txt", "r") or die("Не могу открыть файл");
	echo fread($myFile, 5);
	//echo fread($myFile, 3);
	//echo fread($myFile, 1024);
	fclose($myFile);
	
		
?>
</BODY>
</HTML>