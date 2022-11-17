<html>
    
<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'functions.php'
    ?>
    <h1>Ejercicio 1. Devuelve el número mayor</h1>
    <?php if (isset($result)) { ?>
        <h2> Resultado: <?php echo $result ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Primer número: <input type="number" name="number1" /></p>
        <p>Segundo número: <input type="number" name="number2" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 2. Devuelve si el número es negativo, positivo o neutro</h1>
    <?php if (isset($resultadoEjer2)) { ?>
        <h2> Resultado: <?php echo $resultadoEjer2 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce un número: <input type="number" name="numeroEjer2" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 3. Muestra si es una vocal o no.</h1>
    <?php if (isset($resultadoEjer3)) { ?>
        <h2> Resultado: <?php echo $resultadoEjer3 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce una letra: <input type="text" name="vocal" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 4: Comprueba si es múltiplo de 3 y 5</h1>
    <?php if (isset($resultadoEjer4)) { ?>
        <h2> Resultado: <?php echo $resultadoEjer4 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce un número: <input type="number" name="numeroEjer4" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 5: Comprueba el mayor de tres números</h1>
    <?php if (isset($resultadoEjer5)) { ?>
        <h2> Número más grande: <?php echo $resultadoEjer5 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce el primer número: <input type="number" name="numeroEjer5_1" /></p>
        <p>Introduce el segundo número: <input type="number" name="numeroEjer5_2" /></p>
        <p>Introduce el tercer número: <input type="number" name="numeroEjer5_3" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 6: Cuenta restaurante</h1>
    <?php if (isset($cuenta)) { ?>
        <h3><?php foreach ($cuenta as $key => $value) {
                echo "$key: $value\n";
                echo "<br>";
            } ?></h3>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce el precio de la cuenta: <input type="number" name="restaurante" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 7: Digito a letras</h1>
    <?php if (isset($resultadoEjer7)) { ?>
        <h2> Resultado: <?php echo $resultadoEjer7 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce un número (0-9): <input type="number" name="numeroEjer7" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 8: Pares del rango introducido</h1>
    <?php if (isset($resultadoEjer8)) { ?>
        <h2> Resultado: <?php foreach ($resultadoEjer8 as $value) {
                            echo $value, " ";
                        } ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce el número inicial: <input type="number" name="inicial" /></p>
        <p>Introduce el número final: <input type="number" name="final" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 9: Multiplos de 5 hasta el número introducido</h1>
    <?php if (isset($resultadoEjer9)) { ?>
        <h2> Resultado: <?php foreach ($resultadoEjer9 as $value) {
                            echo $value, " ";
                        } ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce un número: <input type="number" name="numeroEjer9" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 10: Contador Digitos</h1>
    <?php if (isset($resultadoEjer10)) { ?>
        <h3><?php foreach ($resultadoEjer10 as $key => $value) {
                echo "$key: $value\n";
                echo "<br>";
            } ?></h3>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce el precio de la cuenta: <input type="number" name="numeroEjer10" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 11: Número inverso</h1>
    <?php if (isset($resultadoEjer11)) { ?>
        <h2> Resultado: <?php echo $resultadoEjer11 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce un número: <input type="number" name="numeroEjer11" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 12: Cubo perfecto</h1>
    <?php if (isset($resultadoEjer12)) { ?>
        <h2> Resultado: <?php echo $resultadoEjer12 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce un número: <input type="number" name="numeroEjer12" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 13: Suma pares e Impares</h1>
    <?php if (isset($resultadoEjer13)) { ?>
        <h3><?php foreach ($resultadoEjer13 as $key => $value) {
                echo "$key: $value\n";
                echo "<br>";
            } ?></h3>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce un número: <input type="number" name="numeroEjer13" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 14: Multiplos en el rango</h1>
    <?php if (isset($resultadoEjer14)) { ?>
        <h2> Resultado: <?php echo $resultadoEjer14 ?> múltiplos.</h2>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce el rango inicial: <input type="number" name="rango_inicial" /></p>
        <p>Introduce el rango final: <input type="number" name="rango_final" /></p>
        <p>Introduce el número que comprobar múltiplo: <input type="number" name="multiplo_ejer14" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 15. Verifica si es primo</h1>
    <?php if (isset($resultadoEjer15)) { ?>
        <h2> Resultado: <?php echo $resultadoEjer15 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Introduce un número: <input type="number" name="numeroEjer15" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 16: Abecedario</h1>
    <?php if (isset($resultadoEjer16)) { ?>
        <h2> Resultado: <?php foreach ($resultadoEjer16 as $value) {
                            echo $value, " ,";
                        } ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Pulsa para ver el abecedario: <input type="submit" name="abecedario" /></p>
    </form>

    <hr>

    <h1>Ejercicio 17: Login</h1>
    <?php if (isset($resultadoEjer17)) { ?>
        <h2> Resultado: <?php echo $resultadoEjer17 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Usuario: <input type="text" name="username" placeholder="Correo o teléfono" /></p>
        <p>Contraseña: <input type="text" name="password" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 18: Validar Formulario</h1>
    <a href="../FormularioValidar/index.php"><button>Formulario</button></a>

    <hr>

    <h1>Ejercicio 20: Palabra Palindroma</h1>
    <?php if (isset($resultadoEjer20)) { ?>
        <h2> Resultado: <?php echo $resultadoEjer20 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Palabra: <input type="text" name="palabraEjer20" placeholder="Escribe una palabra" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 21: Valida DNI</h1>
    <?php if (isset($resultadoEjer21)) { ?>
        <h2> Resultado: <?php echo $resultadoEjer21 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>DNI:  <input type="number" name="dni" placeholder="Introduce el DNI sin letra" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 22: Contar palabras</h1>
    <?php if (isset($resultadoEjer22)) { ?>
        <h2><?php echo $resultadoEjer22 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Palabra:  <input type="text" name="palabraEjer22" placeholder="Introduce una palabra" /></p>
        <p><input type="submit" /></p>
    </form>

    <hr>

    <h1>Ejercicio 23: Validar Fecha</h1>
    <?php if (isset($resultadoEjer23)) { ?>
        <h2><?php echo $resultadoEjer23 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Fecha:  <input type="text" name="fecha" placeholder="Introduce una fecha (DD/MM/AAAA)" /></p>
        <p><input type="submit" /></p>
    </form>

    <h1>Ejercicio 24: Validar Email</h1>
    <?php if (isset($resultadoEjer24)) { ?>
        <h2><?php echo $resultadoEjer24 ?></h2>
    <?php } ?>
    <form action="" method="post">
        <p>Email:  <input type="text" name="email" placeholder="Introduce tu correo electrónico" /></p>
        <p><input type="submit" /></p>
    </form>
</body>

</html>