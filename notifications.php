<?php
$req_dump = print_r($_REQUEST, TRUE);
$fp = fopen('notifications.log', 'a');
fwrite($fp, $req_dump);
fclose($fp);