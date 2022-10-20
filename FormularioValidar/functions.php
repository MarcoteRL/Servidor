<?php

function validar($nombre, $apellidos, $correo, $telefono)
{
    try {
        if (!preg_match("/^[a-zA-z\s]*$/", $nombre)) {
            echo "<h2 class='error'>Error en el nombre</h2>";
        } else {
            echo "<h2 class='valid'>Correcto</h2>";
        }
        if (!preg_match("/^[a-zA-z\s]*$/", $apellidos)) {
            echo "<h2 class='error'>Error en los apellidos</h2>";
        } else {
            echo "<h2 class='valid'>Correcto</h2>";
        }
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        if (!preg_match($pattern, $correo)) {
            echo "<h2 class='error'>Error en el correo</h2>";
        } else {
            echo "<h2 class='valid'>Correcto</h2>";
        }
        if (!preg_match("/^[0-9]*$/", $telefono) || strlen($telefono) != 9) {
            echo "<h2 class='error'>Error en el telefono</h2>";
        } else {
            echo "<h2 class='valid'>Correcto</h2>";
        }
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
}
