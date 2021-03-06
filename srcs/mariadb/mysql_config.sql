DELETE FROM mysql.user WHERE user='';
DROP DATABASE test;
DELETE FROM mysql.db WHERE Db='test';
DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');
CREATE DATABASE wordpress_database;
CREATE USER wordpress@'%' IDENTIFIED BY 'WP_WPUSER_PSWD';
GRANT ALL PRIVILEGES ON wordpress_database.* TO wordpress@'%';
CREATE USER tvanbesi@'%' IDENTIFIED BY 'WP_ADMIN_PSWD';
GRANT ALL PRIVILEGES ON *.* TO tvanbesi@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
