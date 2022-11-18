<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleAdmin.css">
</head>

<body>
    <header>
        <a href="index.php"><img src="img/cropped-Logo-una-tinta.png" alt="Logo"></a>
    </header>

    <main>
        <?php
        define('__ROOT__', dirname(dirname(__FILE__)));
        require_once(__ROOT__ . '\Practica_Cliente_Servidor\config.php');
        require_once(__ROOT__ . '\Practica_Cliente_Servidor\functions.php');
        session_start();
        $user = $_SESSION['POST'];
        echo "<h2> Bienvenido <span id='nombreUsuario'>$user</span>!</h2>";

        $sql = "SELECT * FROM $user";
        $result = mysqli_query($connect, $sql);
        $check = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($check) {
            echo "<br>";
            echo "<div class='table-wrapper'>";
            echo "<table class='fl-table'>";
            echo " <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Edad</th>
                </tr>
                </thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
                echo "<tr>";
                foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
                    echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
                }
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        } else {
            echo "No tienes alumnos!";
        }
        ?>


    </main>
</body>

</html>