<?php

// Comprobamos que se ha introducido un usuario y contraseña y creamos la cookies.
// Estas cookies se guardaran el navegador.
if(isset($_POST["user"]) && isset($_POST["password"])){
    setcookie("User", $_POST["user"]);
    setcookie("Password", $_POST["password"]);
}
// Comprobamos que se ha introducido un usuario y contraseña y creamos la sesión
// y guardamos los datos en la la variable sessiom.
// Estos datos se guardaran el lado del servidor.
if(isset($_POST["user"]) && isset($_POST["password"])){
    // Comenzamos la sesión
    session_start();
    $_SESSION['user'] = $_POST["user"];
    $_SESSION['pass'] = $_POST["password"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Creamos un formulario de login, en este caso usando bootstrap -->
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

</body>

</html>