FROM debian:buster

RUN apt-get update && apt-get -y upgrade
RUN apt-get install -y wget
RUN apt-get install -y nginx
RUN apt-get install -y mariadb-server
RUN apt-get install -y php-fpm php-mysql
RUN apt-get install -y wordpress

RUN rm -rf /var/www/html
RUN mv usr/share/wordpress/ /var/www/
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz
RUN tar -xzvf phpMyAdmin-5.0.2-english.tar.gz
RUN mv phpMyAdmin-5.0.2-english/ /var/www/

COPY ./srcs/nginx-conf /etc/nginx/sites-available/
COPY ./srcs/wp-config.php ./var/www/wordpress/
COPY ./srcs/certificate.key /var/
COPY ./srcs/certificate.pem /var/
COPY ./srcs/autoindex.sh .
COPY ./srcs/start.sh .

RUN ln -s /etc/nginx/sites-available/nginx-conf /etc/nginx/sites-enabled/
RUN chown -R www-data:www-data /var/www/

EXPOSE 80 443

CMD bash start.sh