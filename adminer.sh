#!/usr/bin/env bash

appDir=$(dirname $(readlink -f $0));

cd "$appDir/www";
port="$PORT";
if [ -z "$port" ]; then port="7777"; fi

mkdir -p ../sess
cmd="php -S 0.0.0.0:$port -d max_input_vars=2000 -d upload_max_filesize=100M -d post_max_size=100M -d session.save_path=$PWD/../sess"
if [[ "$1" == '-f' ]]; then
  exec $cmd
else
  exec $cmd & echo "Adminer server started.. PID: $!";
fi
