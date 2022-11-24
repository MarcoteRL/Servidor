<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Panel de Usuario</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styleAdmin.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <header>
        <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
    </header>

    <main>
        <?php
        define('__ROOT__', dirname(dirname(__FILE__)));
        require_once(__ROOT__ . '\Practica_Cliente_Servidor\config.php');
        require_once(__ROOT__ . '\Practica_Cliente_Servidor\functions.php');

        if (empty($_SESSION['POST'])) {
            session_start();
        }
        $user = $_SESSION['POST'];

        //MOSTRAMOS LA TABLA RECOGIENDO LOS DATOS DE SQL
        echo "<h2> Bienvenido <span id='nombreUsuario'>$user</span>!</h2>";
        $sql = "SELECT * FROM $user ORDER BY `id`";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            $check = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($check) {
                echo "<br>";
                echo "<div class='container-fluid'>";
                echo '<div class="row justify-content-center">';
                echo '<div class="col-3 col-10 text-center">';
                echo "<table id='table' class='table table-hover table-striped table-responsive-sm'>";
                echo " <thead class='table bg-primary'>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nombre</th>
                        <th scope='col'>Apellidos</th>
                        <th scope='col'>Telefono</th>
                        <th scope='col'>Edad</th>
                        <th class='col-2' scope='col' colspan='2'>Opciones</th>
                    </tr>
                    </thead>";
                echo "<tbody>";
                $contador = 0;
                $idAlumno = 0;

                echo "<tr>";

                foreach ($check as $key => $value) {
                    if ($key == 'id') {
                        echo "<td class='$value'>" . $value . "</td>";
                        $idAlumno = $value;
                        $contador++;
                    } else {
                        echo "<td id=$idAlumno>" . $value . "</td>";
                    }
                }
                echo "<td>" . "<button type='button' class='btn btn-primary btn-responsive' contenteditable='false' class='$idAlumno' onclick='javascript:editarAlumno($idAlumno)'>Editar</button>" . "</td>";
                echo "<td>" . "<button type='button' class='btn btn-danger btn-responsive' contenteditable='false' class='$idAlumno' onclick='removeAlumno($idAlumno)'>Eliminar</button>" . "</td>";
                echo "</tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    $contador++;
                    echo "<tr>";
                    $id = $row['id'];
                    $nombre = $row['Nombre'];
                    $apellidos = $row['Apellidos'];
                    $telefono = $row['Telefono'];
                    $edad = $row['Edad'];
                    $idAlumno = $id;
                    echo "<td class='$id'>" . $id . "</td>";
                    echo "<td id=$id>" . $nombre . "</td>";
                    echo "<td id=$id>" . $apellidos . "</td>";
                    echo "<td id=$id>" . $telefono . "</td>";
                    echo "<td id=$id>" . $edad . "</td>";
                    echo "<td>" . "<button type='button' class='btn btn-primary btn-responsive' contenteditable='false' class='$idAlumno' onclick='javascript:editarAlumno($idAlumno)'>Editar</button>" . "</td>";
                    echo "<td>" . "<button type='button' class='btn btn-danger btn-responsive' contenteditable='false'  class='$idAlumno' onclick='removeAlumno($idAlumno)'>Eliminar</button>" . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            } else {
                echo "<p class='mt-4'>No tienes alumnos!</p>";
            }
        }
        ?>
        <!-- FORMULARIO PARA AÑADIR ALUMNOS -->
        <div class="container justify-content-center">
            <form class="form-inline d-none mt-3" id='formulario_add' method="POST" role='form' action=''>
                <div class="form-group mb-2 form-check-inline">
                    <label for="inputNombre" class="sr-only">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder='Nombre'>
                </div>
                <div class="form-group mb-2 form-check-inline">
                    <label for="inputApellidos" class="sr-only">Apellidos</label>
                    <input type="text" class="form-control" id="inputApellidos" name="inputApellidos" placeholder='Apellidos'>
                </div>
                <div class="form-group mb-2 form-check-inline">
                    <label for="inputTelefono" class="sr-only">Telefono</label>
                    <input type="text" class="form-control" id="inputTelefono" name="inputTelefono" placeholder='Telefono'>
                </div>
                <div class="form-group mx-sm-3 mb-2 form-check-inline">
                    <label for="inputEdad" class="sr-only">Edad</label>
                    <input type="text" class="form-control" id="inputEdad" name="inputEdad" placeholder="Edad">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Añadir</button>
            </form>
        </div>

        <p id="add_alumno" class='mt-3'>Añadir alumno <button class="btn btn-primary" id='add' onclick="javascript:removeClass()">+</button></p>


    </main>

    <!-- SCRIPT PARA ELIMINAR EL HISTORIAL DEL FORMULARIO -->
    <script>
        if (window.history.replaceState) { // verificamos disponibilidad
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script src="JS/script.js"></script>
</body>

</html>