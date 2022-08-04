#!/usr/bin/env bash

VER=$(wget -q -O - https://api.github.com/repos/vrana/adminer/releases/latest | grep tag_name | awk -F '["v]' '{print $5}')
wget "https://github.com/vrana/adminer/releases/download/v${VER}/adminer-${VER}.zip"
# wget "http://127.0.0.1:8080/adminer-${VER}.zip"


unzip "adminer-${VER}.zip"

mv adminer-${VER} www

cat<<EOF > www/index.php
<?php header("Location: adminer/plugin.php"); ?>
EOF

# Install & setup FCSqliteConnectionWithoutCredentials plugin.
cd www/plugins
cat<<EOF > fc-sqlite-connection-without-credentials.php
<?php
class SqliteConnectionWithoutCredentials {
    function login(\$login, \$password) {
            return true;
    }
}
EOF
sed -i '/\$plugins = array(/a \\t\tnew SqliteConnectionWithoutCredentials,' ../adminer/plugin.php

echo Installing systemd service ...
mkdir -p $HOME/.config/systemd/user
cp adminer.service $HOME/.config/systemd/user/
echo Reloading systemd ...
systemctl --user daemon-reload
