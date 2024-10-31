<?php 
$ip = $_SERVER['REMOTE_ADDR'];
$xff = $_SERVER['X_FORWARDED_FOR'];

// display it back
echo "<h1>Internal Load Balancing Lab</h1>";
echo "<h2>Client IP</h2>";
echo "Your IP address : " . $ip;
echo "X-Forwarded-For : " . $xff;
echo "<h2>Hostname</h2>";
echo "Server Hostname: " . php_uname("n");
echo "<h2>Server Location</h2>";
echo "Region and Zone: " . "region-here";
echo "<br>"
?>
