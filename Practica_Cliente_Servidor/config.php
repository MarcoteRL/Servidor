<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'practica');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

$create_db = "CREATE DATABASE IF NOT EXISTS `practica`";
if (mysqli_query($link, $create_db)) {
}

$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($connect === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


//CREAR TABLA profesores
$create_table_users = "CREATE TABLE IF NOT EXISTS `profesores` ( `id` INT PRIMARY KEY AUTO_INCREMENT,
`mail` varchar(50) NOT NULL UNIQUE, `password` varchar(50) NOT NULL)";

$connect->query($create_table_users);

if (isset($_GET['value'])) {
    session_start();
    $BBDD = $_SESSION['POST'];
    echo "BBDD: " . $BBDD . "\n";
    $id = intval($_GET['value']);
    echo "id: " . $id . "\n";
    $deleteAlumno = "DELETE FROM $BBDD WHERE `id` = $id ";
    if (mysqli_query($connect, $deleteAlumno)) {
        echo "Fino";
    } else {
        echo "No va";
    };
};
