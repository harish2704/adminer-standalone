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
	include_once( __DIR__ . '/../plugins/tables-filter.php');
	include_once( __DIR__ . '/../plugins/dump-json.php');
	include_once( __DIR__ . '/../plugins/dump-php.php');
	include_once( __DIR__ . '/../plugins/dump-xml.php');
	include_once( __DIR__ . '/../plugins/dump-date.php');
	include_once( __DIR__ . '/../plugins/pretty-json-column.php');
	include_once( __DIR__ . '/../plugins/json-column.php');
	return new Adminer\Plugins(array(
		new SqliteConnectionWithoutCredentials(),
		new AdminerTablesFilter(),
		new AdminerDumpJson(),
		new AdminerDumpXml(),
		new AdminerDumpPhp(),
		new AdminerDumpDate(),
		new AdminerJsonColumn(),
		new AdminerPrettyJsonColumn()
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
