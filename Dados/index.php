<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Juego Dados</h1>
    <div class="juegoDado">

        <?php
        $random_number1 = rand(1, 6);
        $random_number2 = rand(1, 6);
        $random_number3 = rand(1, 6);

        random($random_number1);
        random($random_number2);
        random($random_number3);

        function random($aleatorio)
        {
            switch ($aleatorio) {
                case 1:
                    echo '<div class="dice first-face">
                            <span class="dot">
                            </span>
                        </div>';
                    break;
                case 2:
                    echo ' <div class="dice second-face">
                                <span class="dot">
                                </span>
                                <span class="dot">
                                </span>
                            </div>';
                    break;
                case 3:
                    echo '<div class="dice third-face">
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>';
                    break;
                case 4:
                    echo '<div class="fourth-face dice">
                    <div class="column">
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    <div class="column">
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>';
                    break;
                case 5:
                    echo '<div class="fifth-face dice">

                    <div class="column">
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
        
                    <div class="column">
                        <span class="dot"></span>
                    </div>
        
                    <div class="column">
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
        
                </div>';
                    break;
                case 6:
                    echo '<div class="sixth-face dice">
                    <div class="column">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    <div class="column">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
        
                </div>';
                    break;

                default:
                    break;
            }
        }
        ?>


    </div>
    <h2>Resultado = <?php echo $random_number1 + $random_number2 + $random_number3 ?></h2>

</body>

</html>