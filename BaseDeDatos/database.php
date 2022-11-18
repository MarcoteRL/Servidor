<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once('C:\wamp64\www\Servidor\BaseDeDatos\config.php');

//Inserción de datos

if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['telefono'])) {
    if ($connect === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $sql = "INSERT INTO `prueba`(`Id`, `Nombre`, `Apellidos`, `Telefono`) VALUES ('$id','$nombre','$apellidos','$telefono')";

    if (mysqli_query($connect, $sql)) {
        echo "<h3>Se han guardado los datos correctamente</h3>";

        echo nl2br("\nId: $id\n Nombre: $nombre\n "
            . "Apellidos: $apellidos\n Telefono: $telefono");
    } else {
        echo "ERROR: $sql. "
            . mysqli_error($connect);
    }
    mysqli_close($connect);
}

/**
 * Borrado de elemento de tabla SQL
 */

if (isset($_POST['idBorrado'])) {
    $id = $_POST['idBorrado'];
    $delete = "DELETE FROM  prueba WHERE prueba.id = $id";
    if (mysqli_query($connect, $delete)) {
        echo "<h3>Se han borrado los datos correctamente</h3>";
    } else {
        echo "ERROR: $delete. "
            . mysqli_error($connect);
    }
    mysqli_close($connect);
}

/**
 * Mostrar tabla
 */

if (isset($_POST['btnMostrar'])) {
    $mostrar = "SELECT * FROM prueba";
    $result = mysqli_query($connect, $mostrar);
    while ($row = $result->fetch_assoc()) {
        echo 'Id:' . $row['Id'] . "<br>";
        echo "Nombre: " . $row['Nombre'] . "<br>";
        echo "Apellidos: " . $row['Apellidos'] . "<br>";
        echo "Telefono: " . $row['Telefono'] . "<br>";
        echo "<hr>";
    }
}
