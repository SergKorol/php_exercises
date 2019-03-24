<HTML>
<HEAD>
<TITLE>fgetss</TITLE>
</HEAD>
<BODY>
<PRE>
<?
	if($myFile = fopen("data.html", "r")){
		$lines = array();
		
		while($myLine = fgetss($myFile, 1024, '<br>')){
			$lines = $myLine;
			
		}
		
		fclose($myFile);
		print_r($lines);
	}	
?>
</PRE>
</BODY>
</HTML>