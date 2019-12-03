#!/usr/bin/env bash

VER=4.7.5
wget "https://github.com/vrana/adminer/releases/download/v4.7.5/adminer-${VER}.zip"

unzip "adminer-${VER}.zip"

mv adminer-4.7.5 www

cat<<EOF > www/index.php
<?php header("Location: adminer/plugin.php"); ?>
EOF
