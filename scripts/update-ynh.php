<?php
require('constants.php');
require(LIB_PATH . '/lib_rss.php');
require('app/Models/Configuration.php');
require('app/Models/Entry.php');

$ch = curl_init(FRESHRSS_UPDATE_WEBSITE);
$fp = fopen("update.php", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);


require('update.php');

apply_update();
?>