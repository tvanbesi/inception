FROM debian:buster

RUN	apt-get update > /dev/null; \
	apt-get install -y bash mariadb-server > /dev/null; \
	chmod 777 /var/lib/mysql;

RUN	sed -i "s/#port                   = 3306/port = 3306/g" /etc/mysql/mariadb.conf.d/50-server.cnf; \
	sed -i "s/bind-address            = 127.0.0.1/bind-address = 0.0.0.0/g" /etc/mysql/mariadb.conf.d/50-server.cnf;

RUN mysql_install_db;

COPY ./mysql_config.sql /tmp
COPY entrypoint.sh /

VOLUME /var/lib/mysql

ENTRYPOINT ["bash", "/entrypoint.sh"]
#CMD tail -f /dev/null
