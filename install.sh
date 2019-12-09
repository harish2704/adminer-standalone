#!/usr/bin/env bash

VER=4.7.5
wget "https://github.com/vrana/adminer/releases/download/v4.7.5/adminer-${VER}.zip"

unzip "adminer-${VER}.zip"

mv adminer-4.7.5 www

cat<<EOF > www/index.php
<?php header("Location: adminer/plugin.php"); ?>
EOF

# Install & setup FCSqliteConnectionWithoutCredentials plugin.
cd www/plugins
wget 'https://raw.githubusercontent.com/FrancoisCapon/LoginToASqlite3DatabaseWithoutCredentialsWithAdminer/master/fc-sqlite-connection-without-credentials.php'
sed -i '/\$plugins = array(/a \\t\tnew FCSqliteConnectionWithoutCredentials,' ../adminer/plugin.php

