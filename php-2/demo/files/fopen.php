<HTML>
<HEAD>
<TITLE>fopen</TITLE>
</HEAD>
<BODY>
<?
	$myFile = fopen("data.txt", "r") or die("Не могу открыть файл");
	echo 'Файл успешно открыт для чтения';
	fclose($myFile);
	echo 'Файл закрыт';

	
?>
</BODY>
</HTML>