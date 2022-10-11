# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: iderighe <iderighe@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/09/06 12:23:46 by iderighe          #+#    #+#              #
#    Updated: 2022/10/01 12:54:53 by iderighe         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

NAME=	inception

all:	
		sudo mkdir -p /home/iderighe/data/wordpress
		sudo mkdir -p /home/iderighe/data/mariadb
		docker-compose -f ./srcs/docker-compose.yml build --pull --no-cache
		docker-compose -f ./srcs/docker-compose.yml up -d

up:
		docker-compose -f ./srcs/docker-compose.yml up -d

stop:
		docker-compose -f ./srcs/docker-compose.yml stop

start:
		docker-compose -f ./srcs/docker-compose.yml start

restart:
		docker-compose -f ./srcs/docker-compose.yml restart

inside_mariadb:
		docker-compose -f ./srcs/docker-compose.yml exec mariadb /bin/bash

inside_wordpress:
		docker-compose -f ./srcs/docker-compose.yml exec wordpress /bin/bash

inside_nginx:
		docker-compose -f ./srcs/docker-compose.yml exec nginx /bin/bash

clean:
		docker-compose -f ./srcs/docker-compose.yml stop
		docker-compose -f ./srcs/docker-compose.yml down

prune:	clean
		sudo rm -rf /home/iderighe/data/*
		docker system prune -f -a

.PHONY:	all stop start restart inside_mariadb inside_wordpress inside_nginx clean prune