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


//CREAR TABLA EMPLEADOS
$create_table_users = "CREATE TABLE IF NOT EXISTS `empleados` ( `DNI` varchar(9) PRIMARY KEY NOT NULL,
`nombre` varchar(50) NOT NULL, `apellidos` varchar(50) NOT NULL, `fecha_nacimiento` date NOT NULL)";

$connect->query($create_table_users);

//INSERTAR EMPLEADOS
if (isset($_POST['inputNombre']) && isset($_POST['inputApellidos']) && isset($_POST['inputDNI']) && isset($_POST['inputEdad'])) {
    $nombre = $_POST['inputNombre'];
    $apellidos = $_POST['inputApellidos'];
    $dni = $_POST['inputDNI'];
    $edad = $_POST['inputEdad'];
    $sql = "INSERT INTO  `empleados` (`DNI`, `nombre`, `apellidos`, `fecha_nacimiento`) VALUES ('$dni','$nombre','$apellidos','$edad')";
    if (mysqli_query($connect, $sql)) {
    } else {
    }
}

//BORRADO DE EMPLEADOS
if (isset($_POST['dniBorrar'])) {
    $dni = $_POST['dniBorrar'];
    $deleteAlumno = "DELETE FROM `empleados` WHERE `DNI` = $dni ";
    if (mysqli_query($connect, $deleteAlumno)) {
    } else {
    }
}


//EDITAR EMPLEADO

if (isset($_POST['editarNombre']) && isset($_POST['editarApellidos']) && isset($_POST['editarDNI']) && isset($_POST['editarEdad'])) {
    $nombre = $_POST['editarNombre'];
    $apellidos = $_POST['editarApellidos'];
    $dni = $_POST['editarDNI'];
    $edad = $_POST['editarEdad'];
    $sql = "UPDATE `empleados` SET `nombre`='$nombre',`apellidos`='$apellidos',`fecha_nacimiento`='$edad' 
    WHERE `DNI` = $dni";
    if (mysqli_query($connect, $sql)) {
    } else {
    }
}
