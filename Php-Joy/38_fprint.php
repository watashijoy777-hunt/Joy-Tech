<?php
$file =fopen("bca.txt","w");
fprintf($file,"Hello world");
fclose($file);
?>