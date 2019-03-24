<?php
$fp = fopen('data.txt', 'r');

fseek($fp, -10, SEEK_END);
echo fread($myFile, 10);
fclose($fp);
?>