<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('database.php');
    require_once('C:\wamp64\www\Servidor\BaseDeDatos\config.php');
    ?>
    <h3>Introducir datos tabla</h3>
    <form action="database.php" method="post">
        <input type="text" name="id" id="id" placeholder="Id">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
        <input type="number" name="telefono" id="telefono" placeholder="Telefono">
        <input type="submit" value="enviar">
    </form>

    <br>
    <hr>

    <h3>Borrar datos</h3>
    <form action="database.php" method="post">
        <input type="number" name="idBorrado" id="idBorrado" placeholder="ID">
        <input type="submit" value="Borrar">
    </form>

    <br>
    <hr>
    <h3>Mostrar Tabla</h3>
    <form action="database.php" method="post">
        <button name="btnMostrar">Pulsar</button>
    </form>

</body>

</html>