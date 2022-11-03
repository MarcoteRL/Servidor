<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post" id="msform">
        <fieldset>
            <input type="text" placeholder="Usuario" name="usuario" id="usuario" value="<?php if (isset($_COOKIE['usuario'])) {
                                                                                            echo $_COOKIE['usuario'];
                                                                                        } else {
                                                                                            echo "";
                                                                                        } ?>">
            <br><br>
            <select name="asiento" id="asiento">
                <option value="Ventana" <?php if (isset($_COOKIE['asiento']) && $_COOKIE['asiento'] == "Ventana") {
                                            echo "selected";
                                        }
                                        ?>>Ventana</option>
                <option value="Centro" <?php if (isset($_COOKIE['asiento']) && $_COOKIE['asiento'] == "Centro") {
                                            echo "selected";
                                        }
                                        ?>>Centro</option>
                <option value="Pasillo" <?php if (isset($_COOKIE['asiento']) && $_COOKIE['asiento'] == "Pasillo") {
                                            echo "selected";
                                        }
                                        ?>>Pasillo</option>
            </select>
            <br><br>
            <select name="dieta" id="dieta">
                <option value="Vegetariano" <?php if (isset($_COOKIE['dieta']) && $_COOKIE['dieta'] == "Vegetariano") {
                                                echo "selected";
                                            }
                                            ?>>Vegetariano</option>
                <option value="Infantil" <?php if (isset($_COOKIE['dieta']) && $_COOKIE['dieta'] == "Infantil") {
                                                echo "selected";
                                            }
                                            ?>>Infantil</option>
                <option value="Normal" <?php if (isset($_COOKIE['dieta']) && $_COOKIE['dieta'] == "Normal") {
                                            echo "selected";
                                        }
                                        ?>>Normal</option>
                <option value="Diabetico" <?php if (isset($_COOKIE['dieta']) && $_COOKIE['dieta'] == "Diabetico") {
                                                echo "selected";
                                            }
                                            ?>>Diabetico</option>
            </select>
            <br><br>
            <div id="casillas">
                <input type="checkbox" name="a" id="a" <?php if (isset($_COOKIE['a']) && $_COOKIE['a'] == "on") {
                                                            echo "checked";
                                                        } ?>>Madrid
                <br>
                <input type="checkbox" name="b" id="b" <?php if (isset($_COOKIE['b']) && $_COOKIE['b'] == "on") {
                                                            echo "checked";
                                                        } ?>>Paris
                <br>
                <input type="checkbox" name="c" id="c" <?php if (isset($_COOKIE['c']) && $_COOKIE['c'] == "on") {
                                                            echo "checked";
                                                        } ?>>Lisboa
                <br>
                <input type="checkbox" name="d" id="d" <?php if (isset($_COOKIE['d']) && $_COOKIE['d'] == "on") {
                                                            echo "checked";
                                                        } ?>>Sevilla
                <br><br>
                
            </div>
            <input type="submit" value="Enviar" class="action-button">

        </fieldset>

    </form>

    <?php

    if (isset($_POST['a']) || isset($_POST['b']) || isset($_POST['c']) || isset($_POST['d']) && isset($_POST['usuario'])) {
        $value = 'something from somewhere';
        setcookie("usuario", $_POST['usuario']);
        setcookie("dieta", $_POST['dieta']);
        setcookie("asiento", $_POST['asiento']);
        setcookie("dieta", $_POST['dieta']);
        if (isset($_POST['a'])) {
            setcookie("a", $_POST['a']);
        }
        if (isset($_POST['b'])) {
            setcookie("b", $_POST['b']);
        }
        if (isset($_POST['c'])) {
            setcookie("c", $_POST['c']);
        }
        if (isset($_POST['d'])) {
            setcookie("d", $_POST['d']);
        }
    }

    ?>
</body>

</html>