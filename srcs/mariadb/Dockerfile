FROM debian:buster

RUN	apt update; \
	apt install -y mariadb-server

VOLUME /var/lib/mysql

CMD mysql_install_db && mysqld_safe
CMD tail -f /dev/null
