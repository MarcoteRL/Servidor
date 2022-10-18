<?php
// 1. Dados 2 números diferentes, devolver el mayor. (comprobar que se introducen números y no letras)
function numeroMayor($firstNumber, $secondNumber)
{
    if (is_nan($firstNumber) || is_nan($secondNumber)) {
        return "Introduce un número";
    }
    if ($firstNumber > $secondNumber) {
        return $firstNumber;
    } elseif ($firstNumber == $secondNumber) {
        return "Son iguales";
    } else {
        return $secondNumber;
    }
}

if (isset($_POST['number1']) && isset($_POST['number2'])) {
    $result = numeroMayor($_POST['number1'], $_POST['number2']);
}

// 2. Determinar si un número entero es positivo, negativo o neutro 
// (comprobar que se introducen números y no letras)

function signoNumero($numero_introducido)
{
    if (is_nan($numero_introducido)) {
        return "Introduce un número";
    }
    if ($numero_introducido > 0) {
        return "Positivo";
    } elseif ($numero_introducido == 0) {
        return "Neutro";
    } else {
        return "Negativo";
    }
}

if (isset($_POST['numeroEjer2'])) {
    $resultadoEjer2 = signoNumero($_POST['numeroEjer2']);
}

// 3. Dado un carácter, determinar si es una vocal (Versión A: funciones propias de php. 
// Versión B: intentar resolver mediante sus ASCII)

function vocales($caracter)
{
    if (strlen($caracter) > 1) {
        return "Introduce solo una letra";
    }
    $caracter = strtolower($caracter);
    $lista_vocales = array("a", "e", "i", "o", "u");
    if (in_array($caracter, $lista_vocales)) {
        return ord($caracter);
    } else {
        return "No es una vocal";
    }
}

//Versión B: Función de vocales pero pasando el caracter a ASCII.
function vocales2($caracter)
{
    if (strlen($caracter) > 1) {
        return "Introduce solo una letra";
    }
    $numeroAscii = ord($caracter);
    $lista_ascii = array(65, 69, 73, 79, 85, 97, 101, 105, 111, 117);
    if (in_array($numeroAscii, $lista_ascii)) {
        return "Es una vocal";
    } else {
        return "No es una vocal";
    }
}

if (isset($_POST['vocal'])) {
    $resultadoEjer3 = vocales2($_POST['vocal']);
}


// 4. Determinar si un número es múltiplo de 3 y de 5

function multiplo($numeroEjer4)
{
    if ($numeroEjer4 % 3 == 0 && $numeroEjer4 % 5 == 0) {
        return "Es múltiplo de 3 y 5";
    } else {
        return "No es múltiplo";
    }
}

if (isset($_POST['numeroEjer4'])) {
    $resultadoEjer4 = multiplo($_POST['numeroEjer4']);
}


//5. Dados 3 números enteros, devolver el mayor (comprobar que el número introducido es entero)

function mayorDeTres($numeroEjer5_1, $numeroEjer5_2, $numeroEjer5_3)
{

    if ($numeroEjer5_1 > $numeroEjer5_2 && $numeroEjer5_1 > $numeroEjer5_3) {
        return $numeroEjer5_1;
    } elseif ($numeroEjer5_2 > $numeroEjer5_1 && $numeroEjer5_2 > $numeroEjer5_3) {
        return $numeroEjer5_2;
    } elseif ($numeroEjer5_3 > $numeroEjer5_1 && $numeroEjer5_3 > $numeroEjer5_2) {
        return $numeroEjer5_3;
    } else {
        return "Introduce números distintos!";
    }
}

if (isset($_POST['numeroEjer5_1']) && isset($_POST['numeroEjer5_2']) && isset($_POST['numeroEjer5_3'])) {
    $resultadoEjer5 = mayorDeTres($_POST['numeroEjer5_1'], $_POST['numeroEjer5_2'], $_POST['numeroEjer5_3']);
}

// 6. Un restaurante ofrece un descuento del 10% para consumos hasta 100€ y un descuento del 20%
//  para consumos mayores. Para ambos casos, se aplica un impuesto del 19%.
//  Determinar la cantidad a pagar que le corresponde al descuento, el impuesto y el importe a pagar.
function restaurante($precio)
{
    if ($precio <= 100) {
        $descuento = (10 / $precio) * 100;
    } else {
        $descuento = (20 / $precio) * 100;
    }
    $impuesto = (19 / $precio) * 100;
    $sin_descuento = $precio + $impuesto;
    $total = $sin_descuento - $descuento;
    return ["Descuento" => number_format($descuento, 2), "Impuesto" => number_format($impuesto, 2), "Total" => number_format($total, 2)];
}

if (isset($_POST['restaurante'])) {
    $cuenta = restaurante($_POST['restaurante']);
}

// 7. Dado un número entero de un dígito, devolver ese mismo número expresado en letras

function numberToLetter($numeroEjer7)
{
    $numerosLetras = array("cero", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve");
    if ($numeroEjer7 <= 10) {
        return $numerosLetras[$numeroEjer7];
    } else {
        return "Introduce un número de 0 a 9";
    }
}

if (isset($_POST['numeroEjer7'])) {
    $resultadoEjer7 = numberToLetter($_POST['numeroEjer7']);
}

// 8. Dado un rango de números enteros, obtener la cantidad de números pares que contiene

function devolverPares($inicial, $final)
{
    $arrayPares = array();
    for ($i = $inicial; $i <= $final; $i++) {
        if ($i % 2 == 0) {
            array_push($arrayPares, $i);
        }
    }
    return $arrayPares;
}

if (isset($_POST['inicial']) && $_POST['final']) {
    $resultadoEjer8 = devolverPares($_POST['inicial'], $_POST['final']);
}

function multiplo5Rango($numeroEjer9)
{
    $arrayMultiplos = array();
    for ($i = 0; $i <= $numeroEjer9; $i++) {
        if ($i % 5 == 0) {
            array_push($arrayMultiplos, $i);
        }
    }
    return $arrayMultiplos;
}

if (isset($_POST['numeroEjer9'])) {
    $resultadoEjer9 = multiplo5Rango($_POST['numeroEjer9']);
}


// 10. Dado un número determinar: 
// Cuantos dígitos tiene
// Cuantos dígitos pares tiene
// El dígito mayor

function digitosNumero($numeroEjer10)
{
    $splitted = str_split($numeroEjer10);
    $contador = 0;
    $contadorPares = 0;
    $mayor = $splitted[0];
    foreach ($splitted as $valor) {
        $contador++;
        if ($valor % 2 == 0) {
            $contadorPares++;
        }
        if ($valor > $mayor) {
            $mayor = $valor;
        }
    }
    return ["Dígitos" => $contador, "Pares" => $contadorPares, "Mayor" => $mayor];
}

if (isset($_POST['numeroEjer10'])) {
    $resultadoEjer10 = digitosNumero($_POST['numeroEjer10']);
}

// 11. Dado un número N, devuelve el inverso de ese número

function numeroInverso($numeroEjer11)
{
    return 1 / $numeroEjer11;
}

if (isset($_POST['numeroEjer11'])) {
    $resultadoEjer11 = numeroInverso($_POST['numeroEjer11']);
}

// 12. Crear un algoritmo que indique si un número es un cubo perfecto o no lo es.

function cuboPerfecto($numeroEjer12)
{
    if ($numeroEjer12 < 0) {
        $numeroEjer12 *= -1;
    }
    $resultadoCubo = pow($numeroEjer12, (1 / 3));
    if ($resultadoCubo == floor($resultadoCubo)) {
        return "Es un cubo perfecto";
    } else {
        return "No es un cubo perfecto";
    }
}

if (isset($_POST['numeroEjer12'])) {
    $resultadoEjer12 = cuboPerfecto($_POST['numeroEjer12']);
}

// 13. Dado un número N, obtener la suma de pares y de impares de los primeros enteros positivos.

function sumaPeI($numeroEjer13)
{
    $pares = 0;
    $impares = 0;
    for ($i = 1; $i <= $numeroEjer13; $i++) {
        if ($i % 2 == 0) {
            $pares += $i;
        } else {
            $impares += $i;
        }
    }
    return ["Pares" => $pares, "Impares" => $impares];
}

if (isset($_POST['numeroEjer13'])) {
    $resultadoEjer13 = sumaPeI($_POST['numeroEjer13']);
}

// 14. Dado un número M y un rango, encontrar cuántos múltiplos de M hay en el rango de números enteros

function multiploRangos($inicio, $final, $multiplo)
{
    $contador_multiplos = 0;
    for ($i = $inicio; $i <= $final; $i++) {
        if ($i % $multiplo == 0) {
            $contador_multiplos++;
        }
    }
    return $contador_multiplos;
}

if (isset($_POST['rango_inicial']) && isset($_POST['rango_final']) && isset($_POST['multiplo_ejer14'])) {
    $resultadoEjer14 = multiploRangos($_POST['rango_inicial'], $_POST['rango_final'], $_POST['multiplo_ejer14']);
}

// 15. Dado un número, determinar si es primo. (Hacer dos versiones: una con for y otra con while)

function esPrimo($numeroEjer15)
{
    for ($i = 2; $i < $numeroEjer15; $i++) {
        if ($numeroEjer15 % $i == 0) {
            return "No es primo";
        }
    }
    if ($numeroEjer15 != 1) {
        return "Es primo";
    } else {
        return "No es primo";
    }
}


// Versión con while.
function esPrimo2($numeroEjer15)
{
    $i = 2;
    while ($i < $numeroEjer15) {
        if ($numeroEjer15 % $i == 0) {
            return "No es primo";
        }
        $i++;
    }
    if ($numeroEjer15 != 1) {
        return "Es primo";
    } else {
        return "No es primo";
    }
}

if (isset($_POST['numeroEjer15'])) {
    $resultadoEjer15 = esPrimo2($_POST['numeroEjer15']);
}

// 16. Mostrar las letras desde la a hasta la z. Utilizar un bucle for y como variable de control, un carácter.

function mostrarAlfabeto()
{
    $array_alfabeto = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "u", "v", "w", "x", "y", "z");
    return $array_alfabeto;
}

if (isset($_POST['abecedario'])) {
    $resultadoEjer16 = mostrarAlfabeto();
}


// 17. Crear un login

function login($username, $password)
{
    $array_users = array("andres" => "12345", "pedro" => "3456");
    foreach ($array_users as $key => $value) {
        if ($key == $username) {
            if ($value == $password) {
                return "Login correcto";
            } else {
                return "Contraseña incorrecta";
            }
        } else {
            return "El usuario no existe";
        }
    }
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $resultadoEjer17 = login($_POST['username'], $_POST['password']);
}

?>