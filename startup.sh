#! /bin/bash

apt-get update 
apt-get install -y apache2 php
apt-get install -y wget
cd /var/www/html
rm index.html -f
rm index.php -f
wget https://raw.githubusercontent.com/astianseb/sg-helper-scripts/refs/heads/main/index.php
wget https://raw.githubusercontent.com/astianseb/sg-helper-scripts/refs/heads/main/server.php
META_REGION_STRING=$(curl "http://metadata.google.internal/computeMetadata/v1/instance/zone" -H "Metadata-Flavor: Google")
REGION=`echo "$META_REGION_STRING" | awk -F/ '{print $4}'`
sed -i "s|region-here|$REGION|" index.php
a2enmod ssl
a2ensite default-ssl
systemctl restart apache2.service
