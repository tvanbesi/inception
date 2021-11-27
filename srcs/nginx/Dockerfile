FROM debian:buster

RUN apt update; apt install -y nginx

COPY ./nginx.conf /etc/nginx/nginx.conf

VOLUME /var/www/html

CMD nginx -g 'daemon off;'
