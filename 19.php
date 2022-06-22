<?php
echo "SHUBHAM<br>";
$file = fopen("new.txt", "r");
echo fread($file,filesize("new.txt"));
fclose($file);
?>