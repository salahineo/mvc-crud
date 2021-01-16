<?php

// Paths
define('DS', DIRECTORY_SEPARATOR);
define('APP', realpath(dirname(__FILE__)));
define('VIEWS', APP . DS . 'views');
define('TEMPLATE', APP . DS . 'template');
define('LANGUAGES', APP . DS . 'languages');

// Database Credentials & Options
define('DATABASE_HOST_NAME', 'localhost');
define('DATABASE_USER_NAME', 'root');
define('DATABASE_PASSWORD', 'admin');
define('DATABASE_DB_NAME', 'employees');
define('DATABASE_OPTIONS', [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8']);

// Languages
define('DEFAULT_LANGUAGE', 'ar');
