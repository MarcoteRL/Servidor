<?php

if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    setcookie("Usuario", $user);
    setcookie("Password", $password);
    $resultadoLogin = "Usuario logueado correctamente!";
}

if (isset($_POST['mostrarUsuario'])) {
    if (isset($_COOKIE["Usuario"])) {
        $resultado = $_COOKIE["Usuario"];
    } else {
        $resultado = "No hay cookies!";
    }
}

if (isset($_POST['mostrarPassword'])) {
    if (isset($_COOKIE["Password"])) {
        $resultadoPass = $_COOKIE["Password"];
    } else {
        $resultadoPass = "No hay cookies!";
    }
}

if (isset($_POST['borrar'])) {
    unset($_COOKIE['Password']);
    setcookie('Password', '', time() - 3600);
    unset($_COOKIE['Usuario']);
    setcookie('Usuario', '', time() - 3600);
    if (isset($_COOKIE["Password"]) && isset($_COOKIE["Usuario"])) {
        $resultadoBorrado = "Se han borrado las cookies correctamente!";
    } else {
        $resultadoPass = "No hay cookies!";
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <form id="formulario" method="post">
        <div class="row">
            <div class="col-2">
                <input type="text" class="form-control" name="user" id="usuario" placeholder="Usuario">
            </div>
            <div class="col-2">
                <input type="text" class="form-control" name="password" id="password" placeholder="Contraseña">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
        </div>
    </form>

    <h2><?php
        if (isset($resultadoLogin)) {
            echo $resultadoLogin;
        }
        ?>
    </h2>

    <form method="post" class="mt-3">
        <input type="submit" name="mostrarUsuario" class="btn btn-warning" value="Mostrar Cookies Usuario" />
    </form>

    <h2><?php
        if (isset($resultado)) {
            echo $resultado;
        }
        ?>
    </h2>

    <form method="post" class="mt-3">
        <input type="submit" name="mostrarPassword" class="btn btn-success" value="Mostrar Cookies Contraseña" />
    </form>

    <h2><?php
        if (isset($resultadoPass)) {
            echo $resultadoPass;
        }
        ?>
    </h2>

    <form method="post" class="mt-3">
        <input type="submit" name="borrar" class="btn btn-danger" value="Borrar Cookies" />
    </form>


</body>

</html>