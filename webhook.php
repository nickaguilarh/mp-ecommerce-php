<?php
$jsonString = file_get_contents("php://input");
$myFile = "webhook.log";
file_put_contents($myFile,$jsonString);
echo '{ "success": true }';
