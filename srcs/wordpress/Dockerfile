FROM debian:buster

RUN	apt-get update > /dev/null; \
	apt-get install -y bash php-fpm php-mysql mariadb-client > /dev/null;

RUN	sed -i "s/\/run\/php\/php7.3-fpm.sock/0.0.0.0:9000/g" /etc/php/7.3/fpm/pool.d/www.conf; \
	mkdir -p /run/php

ADD wordpress-5.8.2.tar.gz /tmp
COPY wp-config.php /tmp

COPY entrypoint.sh /

VOLUME /var/www/html

ENTRYPOINT ["bash", "/entrypoint.sh"]
