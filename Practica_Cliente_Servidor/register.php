<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once('C:\wamp64\www\Servidor\Practica_Cliente_Servidor\config.php');
require_once('C:\wamp64\www\Servidor\Practica_Cliente_Servidor\functions.php');

if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    if (!checkIfExists($user, $connect)) {
        $sql = "INSERT INTO `profesores`(`mail`, `password`) VALUES ('$user','$password')";
        mysqli_query($connect, $sql);
        echo ("<script>location.href='index.php'</script>");
    }else{
        header("location:register.php?msg=");
    }
    mysqli_close($connect); 
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Estudio-Login or Sign up</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <main>
        <div class="row">
            <div class="colm-logo">
                <a href="index.php"><img src="img/cropped-Logo-una-tinta.png" alt="Logo"></a>

            </div>
            <form action="" id="formulario" method="post">
                <div class="colm-form">
                    <div class="form-container">
                        <input type="text" id="user" placeholder="Usuario" name="user" required>
                        <input type="password" id="password" placeholder="Contraseña" name="password" required>
                        <button class="btn-login">Registrarse</button>
                    </div>
                </div>
            </form>

        </div>
    </main>
</body>

</html>