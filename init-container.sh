#!/bin/sh
stop="docker stop $(docker ps -aq)"
eval $stop;
cmd="docker-compose -f 'docker-compose.yml' up -d"
eval $cmd
