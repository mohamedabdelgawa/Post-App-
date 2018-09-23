<?php

ob_start();
ini_set('display_errors','on');
define('HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DBNAME','projectx');

$connection = mysqli_connect(HOST,DB_USER,DB_PASS,DBNAME);

if(!$connection){
	die('Problem in Connection');
}





ob_flush();
?>