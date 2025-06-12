#!/usr/bin/env bash

appdir="$PWD"

git clone https://github.com/vrana/adminer.git ./www
cd www
git submodule update --init

cat<<EOF > index.php
<?php header("Location: adminer/plugin.php"); ?>
EOF

cat<<EOF > adminer/plugin.php
<?php

class SqliteConnectionWithoutCredentials {
    function login(\$login, \$password) {
            return true;
    }
}

function adminer_object() {
	return new Adminer\Plugins(array(
		new SqliteConnectionWithoutCredentials(),
	));
}

function skip_sqlite_password()
{
	if (\$_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset(\$_POST['auth']['driver']) && \$_POST['auth']['driver'] === 'sqlite') {
			if (isset(\$_POST['auth']['username'])) { \$_POST['auth']['username'] = ''; }
			if (isset(\$_POST['auth']['password'])) { \$_POST['auth']['password'] = ''; }
		}
	}
}

skip_sqlite_password();

include "./index.php";
EOF

cd "$appdir"

echo Installing systemd service ...
mkdir -p $HOME/.config/systemd/user
cp adminer.service $HOME/.config/systemd/user/
echo Reloading systemd ...
systemctl --user daemon-reload
