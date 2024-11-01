<?php 
$ip = $_SERVER['REMOTE_ADDR'];
$srv_name = $_SERVER['SERVER_NAME'];
$load = sys_getloadavg();


// display it back
echo "----------------------------------------------"
echo "Your IP address: " . $ip . " ";
echo "Server Hostname: " . php_uname("n") . " ";
echo "Server load (1/5/15): " . $load[0] . "/" . $load[1] . "/" . $load[2] . " ";
echo "Region and Zone: " . "region-here" . " ";
echo "----------------------------------------------"
echo "All \$_SERVER variable at http://{$srv_name}/server.php", PHP_EOL;
echo ".............................................." 
?>
