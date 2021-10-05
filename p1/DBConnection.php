<?php
//Establishing connection with the database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('database', 'form'); //where form is the database name
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,database);
 
?>
