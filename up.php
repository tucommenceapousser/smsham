<?php
$smsham = file_get_contents("https://raw.githubusercontent.com/tucommenceapousser/smsham/master/smsham.py");
$file = fopen("smsham.py", "w");
fwrite($file, $smsham);
fclose($file); 
?>
