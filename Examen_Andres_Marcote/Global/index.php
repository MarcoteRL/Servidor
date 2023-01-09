<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Global</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1 style="text-align:center">Tabla Empleados</h1>
        <?php
        define('__ROOT__', dirname(dirname(__FILE__)));
        require_once(__ROOT__ . '\Global\config.php');

        //Convierte la fecha de nacimiento de los empleados a su edad actual. 
        function dateToAge($fecha)
        {
            $nacimiento = new DateTime($fecha);
            $ahora = new DateTime(date("d-m-Y"));
            $diferencia = $ahora->diff($nacimiento);
            return $diferencia->format("%y");
        }

        //MOSTRAMOS LA TABLA RECOGIENDO LOS DATOS DE SQL
        $sql = "SELECT * FROM `empleados` ORDER BY `DNI`";
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
                        <th scope='col'>DNI</th>
                        <th scope='col'>Nombre</th>
                        <th scope='col'>Apellidos</th>
                        <th scope='col'>Edad</th>
                    </tr>
                    </thead>";
                echo "<tbody>";
                echo "<tr>";

                foreach ($check as $key => $value) {
                    if ($key == 'fecha_nacimiento') {
                        echo "<td class='$value'>" . dateToAge($value) . "</td>";
                    } else {
                        echo "<td>" . $value . "</td>";
                    }
                }
                echo "</tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    $DNI = $row['DNI'];
                    $nombre = $row['nombre'];
                    $apellidos = $row['apellidos'];
                    $edad = dateToAge($row['fecha_nacimiento']);
                    echo "<td class='$DNI'>" . $DNI . "</td>";
                    echo "<td>" . $nombre . "</td>";
                    echo "<td>" . $apellidos . "</td>";
                    echo "<td>" . $edad . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            } else {
                echo "<p class='mt-4'>No hay empleados!</p>";
            }
        }


        ?>

        <!-- FORMULARIO PARA AÑADIR ALUMNOS -->
        <div class="container justify-content-center">
            <form class="form-inline mt-3" id='formulario_add' method="POST" role='form' action=''>
                <div class="form-group mb-2 form-check-inline">
                    <label for="inputNombre" class="sr-only">DNI</label>
                    <input type="text" class="form-control" id="inputDNI" name="inputDNI" placeholder='DNI'>
                </div>
                <div class="form-group mb-2 form-check-inline">
                    <label for="inputApellidos" class="sr-only">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder='Nombre'>
                </div>
                <div class="form-group mb-2 form-check-inline">
                    <label for="inputTelefono" class="sr-only">Apellidos</label>
                    <input type="text" class="form-control" id="inputApellidos" name="inputApellidos" placeholder='Apellidos'>
                </div>
                <div class="form-group mx-sm-3 mb-2 form-check-inline">
                    <label for="inputEdad" class="sr-only">Fecha Nacimiento</label>
                    <input type="date" class="form-control datepicker" id="inputEdad" name="inputEdad" placeholder="Fecha de nacimiento">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Añadir</button>
            </form>
        </div>


        <!-- FORMULARIO PARA EDITAR ALUMNOS -->
        <div class="container justify-content-center">
            <form class="form-inline mt-3" id='formulario_add2' method="POST" role='form' action=''>
                <div class="form-group mb-2 form-check-inline">
                    <label for="inputNombre" class="sr-only">DNI</label>
                    <input type="text" class="form-control" id="editarDNI" name="editarDNI" placeholder='DNI'>
                </div>
                <div class="form-group mb-2 form-check-inline">
                    <label for="inputApellidos" class="sr-only">Nombre</label>
                    <input type="text" class="form-control" id="editarNombre" name="editarNombre" placeholder='Nombre'>
                </div>
                <div class="form-group mb-2 form-check-inline">
                    <label for="inputTelefono" class="sr-only">Apellidos</label>
                    <input type="text" class="form-control" id="editarApellidos" name="editarApellidos" placeholder='Apellidos'>
                </div>
                <div class="form-group mx-sm-3 mb-2 form-check-inline">
                    <label for="inputEdad" class="sr-only">Fecha Nacimiento</label>
                    <input type="date" class="form-control datepicker" id="editarEdad" name="editarEdad" placeholder="Fecha de nacimiento">
                </div>
                <button type="submit" class="btn btn-warning mb-2">Editar</button>
            </form>
        </div>

        <!-- FORMULARIO PARA BORRAR ALUMNOS -->
        <div class="container justify-content-center">
            <form class="form-inline mt-3" id='formulario_add2' method="POST" role='form' action=''>
                <div class="form-group mb-2 form-check-inline">
                    <label for="inputDNI" class="sr-only">DNI</label>
                    <input type="text" class="form-control" id="dniBorrar" name="dniBorrar" placeholder='DNI'>
                </div>
                <button type="submit" class="btn btn-danger mb-2">Borrar</button>
            </form>
        </div>
    </main>

    <script src="script.js"></script>
</body>

</html>