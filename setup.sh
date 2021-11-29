#!/bin/bash

if ! cat ./.hosts_configured 2> /dev/null; then
	sed -i "s/127.0.0.1	localhost/127.0.0.1	localhost tvanbesi.42.fr/g" /etc/hosts \
	&& touch ./.hosts_configured \
	&& echo "HOSTS CONFIGURED";
fi
