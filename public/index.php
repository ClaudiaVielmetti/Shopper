<?php
session_start(); //start a session




$path = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']; //Define server path
$path = str_replace("index.php", "", $path); //Replace index.php with blank string


define('ROOT', $path); //Define Root constant
define('ASSETS', $path . "assets/");  // Define Assets constant
include "../app/init.php"; //Include ini.php file



//initializing the app
$app = new App(); 
