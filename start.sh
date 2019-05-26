#!/usr/bin/env bash

if [[ ! -f codecept.phar ]] ; then
    curl -O wget https://codeception.com/codecept.phar --output codecept.phar
    chmod +x codecept.phar
fi

name='chrome'

if [[ ! $(docker ps -f "name=$name" --format '{{.Names}}') == $name ]] ; then
    docker run -d -p 4444:4444 -p 5900:5900 -v /dev/shm:/dev/shm --name $name selenium/standalone-chrome-debug:3.141.59-neon
    echo "Waiting for chrome to start"
    while true; do curl -s localhost:4444 > /dev/null && break; done
fi


./codecept.phar run -vv --html

#docker stop chrome
#docker rm chrome