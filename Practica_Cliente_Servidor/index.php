<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '\Practica_Cliente_Servidor\config.php');
require_once(__ROOT__ . '\Practica_Cliente_Servidor\functions.php');


if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    if (checkIfExists($user, $connect)) {
        if (checkIfPassMatch($connect, $user, $password)) {
            session_start();
            $_SESSION['POST'] = $_POST['user'];
            header("location:admin.php");
        } else {
            header("location:index.php?msg=password_incorrect");
        }
    } else {
        header("location:index.php?msg=user_incorrect");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <main>
        <div class="row">
            <div class="colm-logo col-12 col-md-6 text-center">
                <a href="index.php"><img src="img/logo.png" class="img-fluid" alt="Logo"></a>
            </div>
            <form action="" id="formulario" class="col-12 col-md-6" method="post">
                <div class="colm-form">
                    <div class="form-container">
                        <input type="text" id="userName" placeholder="Correo o teléfono" name="user" required>
                        <input type="password" id="password" placeholder="Contraseña" name="password" required>
                        <button class="btn-login" type="submit">Iniciar
                            Sesión</button>
                        <button class="btn-new" onclick="window.location.href='register.php' ;return false">Crear
                            nueva cuenta</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>