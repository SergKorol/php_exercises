<?php
echo file_get_contents('data.txt');
echo '<hr>';
file_put_contents('data.txt', "\nLine seven", FILE_APPEND);
echo file_get_contents('data.txt');
?>