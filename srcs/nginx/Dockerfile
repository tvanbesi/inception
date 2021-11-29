FROM debian:buster

RUN	apt-get update > /dev/null; \
	apt-get install -y bash nginx > /dev/null;

COPY ./nginx.crt /etc/ssl/certs/nginx.crt
COPY ./nginx.key /etc/ssl/private/nginx.key
COPY ./nginx.conf /etc/nginx/nginx.conf

VOLUME /var/www/html

CMD nginx -g 'daemon off;'
