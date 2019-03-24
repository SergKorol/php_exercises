<?
if(is_file(PATH_LOG)) {
	$file = file(PATH_LOG);
	echo '<ol>';
	foreach ($file as $line) {
		list($dt, $page, $ref) = explode("|", $line);
		$dt = date("d-m-Y H:m:s", (int)$dt);
		echo '<li>';
		echo "$dt - $ref -> $page";
		echo '</li>';
	}
	echo '</ol>';
}