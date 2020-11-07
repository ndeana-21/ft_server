service php7.3-fpm start
service mysql start
service nginx start
mysql --execute="CREATE DATABASE wordpress; \
	GRANT ALL ON wordpress.* TO 'admin'@'localhost' identified by 'admin'; \
	FLUSH PRIVILEGES;"
bash
