<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?
    include('database.php');

    ?>

    <form action="" method="post">
        <input type="text" name="id" id="id">
        <input type="text" name="nombre" id="nombre">
        <input type="text" name="apellidos" id="apellidos">
        <input type="number" name="telefono" id="telefono">
        <input type="submit" value="enviar">
    </form>
</body>

</html>