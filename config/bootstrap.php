<?php 

session_start();


define('DB_DNS', 'mysql:host=localhost;dbname=store');
define('DB_USER', 'root');
define('DB_PASS', '');

require "app/core/router.php";
require "app/core/view.php";
require "app/core/database.php";