<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Servidor</title>
</head>

<body>
    <h1>
        <?php
        date_default_timezone_set("Europe/Madrid");
        setlocale(LC_ALL, 'es_VE.UTF-8', 'esp');
        // $number = 15;
        // $string = "Andres";
        // $hexa = dechex($number);
        // $binary = decbin($number);
        // $scientific_number = 7e3;
        // $boolean1 = false;
        // $boolean2 = true;

        // echo $string, "<br>", $number, "<br>", $hexa, "<br>", $binary, "<br>", $scientific_number, "<br>",
        // $boolean1 ? 'true' : 'false', "<br>", $boolean2 ? 'true' : 'false', "<br>";

        // printf("Mi nombre es %s", $string);
        // echo "<br>";
        // print("Hola $string");
        // echo "<br>";

        // printf("Numero float es:%f:", $number, $number);
        // echo "<br>";
        // printf("Numero entero:%d", $number, $number);
        // echo "<br>";
        // printf("Numero cientifico:%e", $number);
        // echo "<br>";
        // printf("Número octal es:%o", $number);
        // echo "<br>";
        // printf("Número en binario:%b", $number);

        // if(isset($number)) print("Hola");
        $dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
        $dia = $dias[date("N") - 1];
        $meses = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");
        $mes = $meses[date("m") - 1];
        echo "La fecha actual es: " . $dia . " " . date("d") . " de " . $mes . " de " . date("Y");
        echo "<br>";
        // echo $_SERVER["HTTP_HOST"]
        ?>
    </h1>

    <!-- <form name="formulario" method="post" action="months.php">
        Pulsa el botón <input type="submit" value="">
    </form> -->

    <!-- <form action="months.php" method="post">
        <input type="number" id="numero" name="numero" placeholders="Inserta un numero" />
        <input type="submit" value="Enviar" />
    </form>

    <p id="numero"></p> -->
</body>

</html>