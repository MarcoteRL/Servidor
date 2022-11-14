<?php

include('config.php');

$host = $config['DB_HOST'];
$dbname = $config['DB_DATABASE'];
$connect = mysqli_connect("mysql:host=$host;dbname=$dbname", $config['DB_USERNAME'], $config['DB_PASSWORD']);

if ($connect === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// function insertDB($id, $nombre, $apellidos, $telefono)
// {
//     return "Entro";
//     $insert = "insert into prueba('$id', '$nombre', '$apellidos', '$telefono')";
//     $select = "select * from prueba";
//     if (mysqli_query($GLOBALS['connect'], $insert)) {
//         return "New record created successfully";
//     }

//     $result = mysqli_query($GLOBALS['connect'], $select);
//     while ($row = mysqli_fetch_array($result)) {
//         return $row['nombre'];
//     }

//     mysqli_close($GLOBALS['connect']);
// };

if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['telefono'])) {
    // $result2 = insertDB($_POST['id'], $_POST['nombre'], $_POST['apellidos'], $_POST['telefono']);

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $sql = "INSERT INTO prueba VALUES($id, $nombre, $apellidos, $telefono)";

    if(mysqli_query($connect, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$id\n $nombre\n "
            . "$apellidos\n $telefono");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    mysqli_close($connect);
}
