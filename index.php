<?php 
$ip = $_SERVER['REMOTE_ADDR'];

// display it back
echo "Your IP address : " . $ip;
echo "Server Hostname: " . php_uname("n");
echo "Region and Zone: " . "region-here";
echo "$_SERVER variable at <url>/server.php", PHP_EOL; 
?>
