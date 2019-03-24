<HTML>
<HEAD>
<TITLE>fgets</TITLE>
</HEAD>
<BODY>
<pre>
<?
	if($myFile = fopen("data.txt", "r")){
		$lines = array();
		
		while($myLine = fgets($myFile)){
			$lines[] = $myLine;
		}
		
		fclose($myFile);
		print_r($lines);
	}	
?>
</BODY>
</HTML>