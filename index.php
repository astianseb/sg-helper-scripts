<?php 
$ip = $_SERVER['REMOTE_ADDR'];
$srv_name = $_SERVER['SERVER_NAME'];

// display it back
echo "Your IP address: " . $ip " ";
echo "Server Hostname: " . php_uname("n") " ";
echo "Region and Zone: " . "region-here" " ";
echo "\$_SERVER variable at http://{$srv_name}/server.php", PHP_EOL; 
?>
