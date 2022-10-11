# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: iderighe <iderighe@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/09/07 10:59:59 by iderighe          #+#    #+#              #
#    Updated: 2022/10/04 12:41:58 by iderighe         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# OS (installe l'image de base)
FROM	debian:buster

# Update & upgrade
RUN		apt-get -y update

# Telecharge et installe les services dont on aura besoin
RUN		apt-get -y install mariadb-server

# Ports that needs to be exposed at run time with -p [host port]:[container port]
EXPOSE	3306

# Mettre notre fichier de config de mariadb dans notre dossier de travail
COPY	./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY	./tools/start_db.sh /var/www/start_db.sh

RUN		mkdir -p /run/mysqld
RUN		chown -R mysql:root /run/mysqld
RUN		chown -R mysql:mysql /var/lib/mysql

ENTRYPOINT ["bash", "var/www/start_db.sh"]

CMD		["mysqld"]