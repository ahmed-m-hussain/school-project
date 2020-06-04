<?php
//database info
define('DB_HOST', 'localhost');
define('DB_NAME', 'help_project');
define('DB_USER', 'root');
define('DB_PASS', '');
define('URL', 'http://localhost/help/project/');

//database connection
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//check is connected
if($mysqli->connect_error)
{
    die('Connect Error' . $mysqli->connect_error);
}

//character set for arabic inputs
$mysqli->query("SET NAMES 'utf8'");
$mysqli->query("SET CHARACTER SET 'utf8'");
$mysqli->query("SET COLLATION_CONNECTION='utf8_general_ci'");
$mysqli->query("SET character_set_results = 'utf8'");
$mysqli->query("SET character_set_server = 'utf8'");
$mysqli->query("SET character_set_client = 'utf8'");
