<?php
//-------------
define("HOST","localhost");
define("DBNAME","kadai");
define("DBUSER","root");
define("DBPASS","");
//-------------
$dsn = "mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8";
$pdo = new PDO($dsn, DBUSER, DBPASS);

?>