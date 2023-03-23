#!/usr/bin/env bash

fname=`readlink -n -f $1 | jq -sRr @uri`

xdg-open "http://localhost:7777/adminer/plugin.php?sqlite=&username=&db=$fname"
