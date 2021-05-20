FROM debian:buster

RUN apt-get update && apt-get install -y \
nginx \
default-mysql-server \
openssl \
php7.3 \
php7.3-fpm \
php-xml \
php-mysql \
php-mbstring \
ca-certificates \
vim \
wget

RUN service mysql start && \
mysql -u root -e \
"create database wordpress; grant all on wordpress.* to dbuser@localhost identified by 'pass';"

RUN wget https://wordpress.org/latest.tar.gz && \
tar -xzf latest.tar.gz && \
rm latest.tar.gz && \
mv wordpress var/www/html

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.tar.gz && \
tar -xzf phpMyAdmin-5.1.0-all-languages.tar.gz && \
mv phpMyAdmin-5.1.0-all-languages phpMyAdmin && \
mv phpMyAdmin var/www/html/

RUN openssl genrsa -out /etc/ssl/private/server.key 2048 && \
openssl req -new -key /etc/ssl/private/server.key -out /etc/ssl/certs/server.csr -subj "/C=/ST=/L=/O=/OU=/CN=" && \
openssl x509 -days 3650 -req -signkey /etc/ssl/private/server.key -in /etc/ssl/certs/server.csr -out /etc/ssl/certs/server.crt

COPY ./srcs/default /etc/nginx/sites-available/default
COPY ./srcs/wp-config.php /var/www/html/wordpress
COPY ./srcs/config.inc.php /var/www/html/phpMyAdmin
COPY ./srcs/autoindex.sh .

RUN chown -R www-data:www-data "/var/www/html/wordpress" && \
find /var/www/html/wordpress -type d -exec chmod 755 {} + && \
find /var/www/html/wordpress -type f -exec chmod 644 {} +

RUN chown -R www-data:www-data "/var/www/html/phpMyAdmin" && \
find /var/www/html/phpMyAdmin -type d -exec chmod 755 {} + && \
find /var/www/html/phpMyAdmin -type f -exec chmod 644 {} +

EXPOSE 80 443

CMD bash ./autoindex.sh && \
service nginx start && \
service php7.3-fpm start && \
service mysql start && \
tail -f /dev/null
