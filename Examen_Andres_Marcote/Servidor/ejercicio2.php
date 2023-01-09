<?php

session_start();

if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $_SESSION['user'] = $user;
    $_SESSION['pass'] = $password;
    $resultadoLogin = "Usuario logueado correctamente!";
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
<h1>Usando session</h1>
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
        if (isset($_POST['mostrarUsuario'])) {
            if (isset($_SESSION['user'])) {
                echo $_SESSION['user'];
            } else {
                echo "No hay cookies!";
            }
        }
        ?>
    </h2>

    <form method="post" class="mt-3">
        <input type="submit" name="mostrarPassword" class="btn btn-success" value="Mostrar Cookies Contraseña" />
    </form>

    <h2><?php
        if (isset($_POST['mostrarPassword'])) {
            if (isset($_SESSION['pass'])) {
                echo $_SESSION['pass'];
            } else {
                echo "No hay cookies!";
            }
        }
        ?>
    </h2>

    <form method="post" class="mt-3">
        <input type="submit" name="borrar" class="btn btn-danger" value="Borrar Cookies" />
    </form>

    <h2><?php
        if (isset($_POST['borrar'])) {
            if (isset($_SESSION['pass']) && isset($_SESSION['user'])) {
                unset($_SESSION['pass']);
                unset($_SESSION['user']);
                session_destroy();
                echo "Cookies borradas correctamente!";
            } else {
                echo "No hay cookies!";
            }
        }
        ?>
    </h2>
</body>

</html>