#!/bin/bash

cat /var/www/html/.wordpress_installed 2> /dev/null;
if [ $? -ne 0 ]; then
	cp -R /tmp/wordpress/* /var/www/html;
	sed -i "s/WP_WPUSER_PSWD/${WP_WPUSER_PSWD}/g" /tmp/wp-config.php;
	cp /tmp/wp-config.php /var/www/html;
	touch /var/www/html/.wordpress_installed;
	echo "WORDPRESS INSTALLED";
fi

php-fpm7.3 -F;
