<?php
// 19. Crea una web, que reciba los años de nacimiento de varios alumnos. El programa debe ser capaz
//  de ordenarlos de menor a mayor, permitir nuevos años y buscar un año concreto así como eliminarlo
//  diciendo si existe o no existe. También debe ser capaz de leer el array diciendo que posición ocupa
//  cada elemento en su interior. 

$DATABASE = array();

if (isset($_POST['ordenar'])) {
    function () use ($DATABASE) {
        if (count($DATABASE) > 0) {
            $arr = $DATABASE;
            $ordenado = array();
            $mayor = $arr[0];
            while (count($arr) > 0) {
                foreach ($arr as $valor) {
                    if ($valor > $mayor) {
                        $mayor = $valor;
                    }
                }
                array_push($ordenado, $mayor);
                array_splice($arr, $mayor, 1);
            }
            print($ordenado);
        } else {
            echo "Base de datos vacía!";
        }
    };
}

if (isset($_POST['alumnoYear'])) {
    $year = $_POST['alumnoYear'];
    PRINT($year);
    $DATABASE = array();
    function ordenar($year){
        print("entro");
        array_push($DATABASE, $year);
        foreach ($DATABASE as $value) {
            print($value);
        }    
    };
    ordenar($year);
}