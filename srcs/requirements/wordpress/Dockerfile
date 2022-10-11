# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: iderighe <iderighe@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/09/08 13:55:59 by iderighe          #+#    #+#              #
#    Updated: 2022/10/04 11:49:58 by iderighe         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# OS (installe l'image de base)
FROM	debian:buster

# Creer le dossier de travail et entre dedans
WORKDIR	/var/www/html/wordpress

# Update & upgrade
RUN		apt-get -y update

# Telecharge et installe les services dont on aura besoin
RUN		apt-get -y install wget php7.3-fpm php7.3-common php-mysql mariadb-client

RUN		wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN		chmod +x wp-cli.phar
RUN		cp wp-cli.phar /usr/local/bin/wp

# Ports that needs to be exposed at run time with -p [host port]:[container port]
EXPOSE	9000

# Copier les fichiers config et script
COPY	./conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf
#COPY	./tools/wp-config.php /var/www/html/wordpress/wp-config.php
COPY	./tools /var/www/html

# Change rights
RUN		chmod +x /var/www/html/wordpress_start.sh

# Lance le script de chargement de wordpress
ENTRYPOINT	["bash", "/var/www/html/wordpress_start.sh"]

# Start
CMD		["/usr/sbin/php-fpm7.3", "--nodaemonize"]
