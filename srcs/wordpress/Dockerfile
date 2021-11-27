FROM debian:buster

RUN apt update; apt install -y php-fpm php-mysql mariadb-client

RUN sed -i "s/\/run\/php\/php7.3-fpm.sock/0.0.0.0:9000/g" /etc/php/7.3/fpm/pool.d/www.conf; mkdir -p /run/php

ADD wordpress-5.8.2.tar.gz /tmp

#RUN if [ ! -d "/var/www/html" ];then mkdir -p /var/www/html && cp -R /tmp/wordpress /var/www/html && chown -Rv www-data: /var/www/html;fi

VOLUME /var/www/html

CMD php-fpm7.3 -F
