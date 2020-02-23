<?php

ini_set('display_errors', 1);

define('DSN', 'mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e2844c210070f6f');
define('DB_USERNAME', 'bc8dd8298dbbaa');
define('DB_PASSWORD', 'a7b4239e');

// $url = parse_url(getenv("mysql://bc8dd8298dbbaa:a7b4239e@us-cdbr-iron-east-04.cleardb.net/heroku_e2844c210070f6f?reconnect=true"));
//
// $server = $url["us-cdbr-iron-east-04.cleardb.net"];
// $username = $url["bc8dd8298dbbaa"];
// $password = $url["a7b4239e"];
// $db = substr($url["heroku_e2844c210070f6f"], 1);
//
// $conn = new mysqli($server, $username, $password, $db);


//
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);

require_once(__DIR__. '/../lib/functions.php');
require_once(__DIR__. '/autoload.php');

session_start();

?>

<!--
define('DSN', 'mysql:dbhost=localhost;dbname=dotinstall_sns_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'mu4uJsif');
 -->
