<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'practica');

$create_db = 'CREATE DATABASE if not exists practica';
if (mysql_query($connect, $create_db)) {
    // echo "Database practica created successfully\n";
} 


$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($connect === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

