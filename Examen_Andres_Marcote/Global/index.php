<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <?php
        define('__ROOT__', dirname(dirname(__FILE__)));
        require_once(__ROOT__ . '\Global\config.php');

        //MOSTRAMOS LA TABLA RECOGIENDO LOS DATOS DE SQL
        $sql = "SELECT * FROM `examen` ORDER BY `DNI`";
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
                echo "<td>" . "<button type='button' class='btn btn-primary btn-responsive' contenteditable='false' id='$idAlumno' onclick='javascript:editarAlumno($idAlumno)'>Editar</button>" . "</td>";
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
                    echo "<td>" . "<button type='button' class='btn btn-primary btn-responsive' contenteditable='false' id='$idAlumno' onclick='javascript:editarAlumno($idAlumno)'>Editar</button>" . "</td>";
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
    </main>
</body>

</html>