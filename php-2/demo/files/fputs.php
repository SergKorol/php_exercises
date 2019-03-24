<HTML>
<HEAD>
<TITLE>fputs</TITLE>
</HEAD>
<BODY>
<?
	$myFile = fopen("data.txt", "a+") or die("Не могу открыть файл");
		fputs($myFile, "\nLine six");
	}
	fclose($myFile);
?>
</BODY>
</HTML>