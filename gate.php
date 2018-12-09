<?php
date_default_timezone_set("Europe/Berlin");
$myfile = fopen("users.txt", "a")or die("x");
$ip = $_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$time = date("h:m:s");
fwrite($myfile, $ip . "*" . $agent . "*" . $time . "\n");
fclose($myfile);
?>

