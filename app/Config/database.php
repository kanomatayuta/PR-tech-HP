<?php
//
// Database Configuration File created by baserCMS Installation
//
class DATABASE_CONFIG {
public $default = array(
	'datasource' => 'Database/BcMysql',
	'persistent' => false,
	'host' => 'localhost',
	'port' => '8888',
	'login' => 'mamp',
	'password' => 'root',
	'database' => 'basercms',
	'schema' => '',
	'prefix' => 'mysite_',
	'encoding' => 'utf8'
);
public $test = array(
	'datasource' => 'Database/BcMysql',
	'persistent' => false,
	'host' => 'localhost',
	'port' => '8888',
	'login' => 'mamp',
	'password' => 'root',
	'database' => 'basercms',
	'schema' => '',
	'prefix' => 'mysite_test_',
	'encoding' => 'utf8'
);
}
