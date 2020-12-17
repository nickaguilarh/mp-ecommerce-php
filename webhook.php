<?php
$jsonString = file_get_contents("php://input");
$myFile = "webhook.log";
$fp = fopen($myFile, 'a');
fwrite($fp, $jsonString);
fwrite($fp, '|END|');
fclose($fp);
echo '{ "success": true }';
