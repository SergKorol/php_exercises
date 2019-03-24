<?
	$myFile = fopen("data.txt", "r") or die("Не могу открыть файл");
	fread($myFile, 5);
	fpassthru($myFile);
	fclose($myFile);
?>
