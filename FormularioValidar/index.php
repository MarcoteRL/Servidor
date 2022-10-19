<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Validación</title>
</head>

<body>
    <?php
    include 'functions.php'
    ?>
    <h1>Validación Formulario PHP</h1>
    <div class="row">
        <form action="" id="formulario" method="post">
            <div class="colm-form">
                <div class="form-container">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required>
                    <input type="text" name="correo" id="correo" placeholder="Correo electrónico" required>
                    <input type="text" name="telefono" id="telefono" placeholder="Número teléfono" required>
                    <button class="btn-login" type="submit">Validar</button>
                </div>
            </div>
        </form>
    </div>

    <div id="resultado">
        <?php
        if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['correo']) && isset($_POST['telefono'])) {
            validar($_POST['nombre'], $_POST['apellidos'], $_POST['correo'], $_POST['telefono']);
        }
        ?>
    </div>

</body>

</html>