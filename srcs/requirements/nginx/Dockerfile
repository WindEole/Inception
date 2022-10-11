# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: iderighe <iderighe@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/09/07 15:39:07 by iderighe          #+#    #+#              #
#    Updated: 2022/10/04 11:49:12 by iderighe         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# OS (installe l'image de base)
FROM	debian:buster

# Telecharge et installe le service NGINX : logiciel libre de serveur Web + openssl + procps (gestion de processus : kill, free, zombie...)
RUN		apt-get -y update
RUN		apt-get install -y nginx openssl

# Copy the Nginx config
COPY	./conf/nginx.conf /etc/nginx/sites-enabled/nginx.conf

# Creer les dossiers utiles
# RUN		mkdir /etc/nginx/ssl
RUN		mkdir -p /var/www/html/wordpress

# Configure SSL for Nginx
RUN		openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
		-out /etc/ssl/certs/nginx.crt \
		-keyout /etc/ssl/certs/nginx.key \
		-subj '/C=FR/ST=75/L=Paris/O=42/OU=iderighe/CN=iderighe.42.fr'

# Expose the port for access
EXPOSE	443

# run Nginx whenever our Docker image launches
CMD 	["/usr/sbin/nginx", "-g", "daemon off;"]