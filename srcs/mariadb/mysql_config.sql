DELETE FROM mysql.user WHERE user='';
DROP DATABASE test;
DELETE FROM mysql.db WHERE Db='test';
DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');
CREATE USER wordpress@'%' IDENTIFIED by 'pswd';
CREATE DATABASE wordpress_database;
GRANT ALL PRIVILEGES ON wordpress_database.* TO wordpress@'%';
FLUSH PRIVILEGES;
