<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'examen');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

// CREA LA BASE DE DATOS SI NO EXISTE
$create_db = "CREATE DATABASE IF NOT EXISTS `examen`";
if (mysqli_query($link, $create_db)) {
}

// LINK CON LA BASE DE DATOS
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($connect === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


//CREAR TABLA profesores
$create_table_users = "CREATE TABLE IF NOT EXISTS `empleados` ( `DNI` varchar(9) PRIMARY KEY NOT NULL,
`nombre` varchar(50) NOT NULL, `apellidos` varchar(50) NOT NULL, `fecha_nacimiento` date NOT NULL)";

$connect->query($create_table_users);