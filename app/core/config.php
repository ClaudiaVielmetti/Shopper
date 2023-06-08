<?php

define("WEBSITE_TITLE", "REVERSE");


// Database
define('DB_NAME', "shop_db");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_TYPE', "mysql");
define('DB_HOST', "localhost");

define('THEME', "shop/");

//when in debug mode = true if not false
define('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', 1);
} else {
    ini_set('display_errors', 0);
}
