<?php 
// Here we define constants (constants can be accessed anywhere, for they have global scope)

// set website title
define('WEBSITE_TITLE', 'simple_website');

// set database variables
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'my_first_database');
define('DB_USER', 'islom');
define('DB_PASS', '1234');

// protocol type http or https
define('PROTOCOL', 'http');

// root and asset paths
$path = str_replace('\\', '/',  PROTOCOL . '://' . $_SERVER['SERVER_NAME'] . __DIR__ . '/');
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace('app/core', 'public', $path));
define('ASSETS', str_replace('app/core', 'public/assets', $path));

// set to true to allow error reporting or to false when you upload online to stop error reporting
// we usually set it to false when we finally deploy our website
define('DEBUG', true);
DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);