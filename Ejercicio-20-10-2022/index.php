<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
header( "refresh:5;Location : http://www.google.com" );
echo 'You\'ll be redirected in about 5 secs. If not, click <a href="www.google.com">here</a>.';
?>

<body>
    <form action="" method="post">
        <p>Introduce una palabra <input type="text" name="hola"></p>
        <button type="submit">Enviar</button>
    </form>

    <?php


    function shutdown()
    {
        echo "<br>Hasta la proxima";
    }

    if (isset($_POST['hola'])) {
        $texto = $_POST['hola'];
        if (strlen($texto) > 0) {
            register_shutdown_function("shutdown");
            exit("No funciona");
        } else {
            echo $texto;
        }
    }
    ?>
</body>

</html>