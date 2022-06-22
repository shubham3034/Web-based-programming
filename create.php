<?php
echo "SHUBHAM<br>";
$file = fopen("new.txt", "w");
$txt = "RAJPUT'S\n";
fwrite($file, $txt);
$txt ="always on TOP\n";
fwrite($file, $txt);
fclose($file);
?>