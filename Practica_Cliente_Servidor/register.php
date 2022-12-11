<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '\Practica_Cliente_Servidor\config.php');
require_once(__ROOT__ . '\Practica_Cliente_Servidor\functions.php');

//SE AÑADE EL USUARIO A LA TABLA DE PROFESORES Y SE CREA UNA PROPIA

if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    if (!checkIfExists($user, $connect)) {
        $sql = "INSERT INTO `profesores`(`mail`, `password`) VALUES ('$user','$password')";
        mysqli_query($connect, $sql);
        $create_table = "CREATE TABLE $user (`id` INT PRIMARY KEY AUTO_INCREMENT,
        `Nombre` varchar(50) NOT NULL, `Apellidos` varchar(50) NOT NULL, `Telefono` INT(9) NOT NULL, `Edad` INT(2) NOT NULL)";
        $connect->query($create_table);
        header("location:index.php");
    } else {
        header("location:register.php?msg=erro");
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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <main>
        <div class="row">
            <div class="colm-logo col-12 col-md-6 text-center mb-5">
                <a href="index.php"><img src="img/logo.png" class="img-fluid" alt="Logo"></a>
            </div>
            <form action="" id="formulario" class="col-12 col-md-6 text-center" method="post">
                <div class="colm-form justify-content-center">
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