<?php
$fecha = strval($_POST['fecha']);
$meses = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");
$splitted = explode("-", $fecha);
$day = $splitted[2];
$month = $splitted[1];
$year = $splitted[0];


echo "El día introducido es: " . $day . " de " . $meses[$month - 1] . " del año " . $year;


// Creamos un switch para que me diga en que mes estamos introduciendo el numero.