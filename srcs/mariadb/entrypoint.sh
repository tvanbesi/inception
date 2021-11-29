#!/bin/bash

if ! cat /var/lib/mysql/.mariadb_installed 2> /dev/null; then
	mysql_install_db 2> /dev/null;
	touch /var/lib/mysql/.mariadb_installed;
	echo "MARIADB INSTALLED";
fi

mysqld_safe &

mysqladmin ping 2> /dev/null;
while [ $? -ne 0 ]; do echo "waiting for myql server for setup..."; sleep 1; mysqladmin ping 2> /dev/null; done;

cat /var/lib/mysql/.mariadb_configured 2> /dev/null;
if [ $? -ne 0 ]; then
	mariadb -u root < /tmp/mysql_config.sql;
	touch /var/lib/mysql/.mariadb_configured;
	echo "MARIADB CONFIGURED";
fi

echo "shutting down mysql daemon";
mysqladmin shutdown;
echo "restarting mysql daemon";
mysqld_safe;
