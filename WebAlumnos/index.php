<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'functions.php'
    ?>
    <h1>Ejercicio 19: Web año nacimiento</h1>
    <?php if (isset($resultadoEjer19)) { ?>
        <h2> Resultado: <?php echo $resultadoEjer19 ?></h2>
    <?php } ?>
    
    <form action="" method="post">
        <p>Año nacimiento alumno: <input type="number" name="alumnoYear" /></p>
        <p>Ordenar: <input type="submit" name="ordenar" /></p>
        <p>Eliminar año: <input type="number" name="deleteYear" /></p>
        <p>Buscar año: <input type="number" name="searchYear" /></p>
        <p>Eliminar año: <input type="number" name="password" /></p>
        <p><input type="submit" /></p>
    </form>
    


</body>

</html>