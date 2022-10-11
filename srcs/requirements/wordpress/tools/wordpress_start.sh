#!/bin/bash

# 	sed -i "s/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/" "/etc/php/7.3/fpm/pool.d/wp-config.php";
# 	chown -R www-data:www-data /var/www/*;
# 	chown -R 755 /var/www/*;
mkdir -p /var/run/php/;
touch /var/run/php/php7.3-fpm.pid;

# if [ ! -f /var/www/html/wp-config.php ]
# then
# 	echo "Wordpress: setting up..."
# 	mkdir -p /var/www/html
# 	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar;
# 	chmod +x wp-cli.phar; 
# 	mv wp-cli.phar /usr/local/bin/wp;
# 	cd /var/www/html/wordpress;
# 	wp core download --allow-root;
# 	mv /var/www/wp-config.php /var/www/html/    ------------> INUTILE ! le wp-config.php par defaut suffit !
# 	echo "Wordpress: creating users..."
# 	wp core install --allow-root --url=${DOMAIN_NAME} --title=inception --admin_user=${LOGIN} --admin_password=${PASSWORD} --admin_email=${EMAIL}
# 	wp user create --allow-root ${GUEST_LOGIN} ${GUEST_EMAIL} --user_pass=${GUEST_PWD};
# 	echo "Wordpress: set up!"
# fi

# exec "$@"
# echo "Wordpress started on :9000"

# ---------- On ne telecharge Wordpress que si on ne l'a pas deja ! ---------- #

# ATTENTION : --dbcharset="utf8" --dbcollate="utf8_general_ci" utilise du faux utf8 : les caractères sont codés sur 3 bits au lieu de 4...
# --role=subscriber
wp core download --allow-root
wp config create --dbname=wordpress --dbuser=$LOGIN --dbpass=$PASSWORD --dbhost=mariadb --dbcharset="utf8mb4" --dbcollate="utf8mb4_unicode_ci" --force --allow-root
wp core install --url=$DOMAIN_NAME --title=inception --admin_user=$LOGIN --admin_password=$PASSWORD --admin_email=$EMAIL --skip-email --allow-root
wp user create $GUEST_LOGIN $GUEST_EMAIL --user_pass=$GUEST_PWD --allow-root

sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0" /etc/php/7.3/fpm/php.ini;

exec "$@"