<HTML>
<HEAD>
<TITLE>flock</TITLE>
</HEAD>
<BODY>
<?
	$fp = fopen("data.txt", "a");

	flock($fp, LOCK_EX);

	fputs($fp, "\nLine new");

	flock($fp, LOCK_UN);

	fclose($fp);
	
?>
</BODY>
</HTML>