<?
	ob_start();
?>
<HTML>
<HEAD>
<TITLE>ob_start</TITLE>
</HEAD>
<BODY>
<?
	print("На данный момент ");
	print(strlen(ob_get_contents()));
	print(" символов в буфере.<BR>\n");
?>
</BODY>
</HTML>
<?
	header("X-Custom-Header: PHP");

	ob_end_flush();
?>
