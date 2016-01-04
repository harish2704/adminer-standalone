#!/usr/bin/env bash

appDir=$(dirname $(readlink -f $0));

cd "$appDir/www";
port="$PORT";
if [ -z "$port" ]; then port="7777"; fi

php -S "0.0.0.0:$port" & echo "Adminer server started.. PID: $!";
