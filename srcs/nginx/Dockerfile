FROM debian:buster

RUN	apt-get update > /dev/null; \
	apt-get install -y bash nginx > /dev/null;

COPY ./nginx.conf /etc/nginx/nginx.conf

VOLUME /var/www/html

CMD nginx -g 'daemon off;'
