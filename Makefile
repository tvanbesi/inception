all:	up

up:		setup
		cd ./srcs && docker-compose down && docker-compose up -d

#first time setup need sudo privileges `sudo make`
setup:
		bash setup.sh

down:
		cd ./srcs && docker-compose down

#need sudo privileges to work `sudo make wipe`
wipe:
		rm -rf /home/tvanbesi/data/database/*;
		rm -rf /home/tvanbesi/data/database/.mariadb_installed;
		rm -rf /home/tvanbesi/data/database/.mariadb_configured;
		rm -rf /home/tvanbesi/data/wordpress/*
		rm -rf /home/tvanbesi/data/wordpress/.wordpress_installed;

.PHONY:
		all up down wipe
