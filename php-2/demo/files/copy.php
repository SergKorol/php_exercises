<HTML>
<HEAD>
<TITLE>copy</TITLE>
</HEAD>
<BODY>
<?
	if(copy("data.txt", "upload/data.txt"))
	{
		print("data.txt скопирован в /upload");
	}
	else
	{
		print("data.txt не был скопирован");
	}
?>
</BODY>
</HTML>