<?php
/**
 * PORTAS LÓGICAS
 * AND ou &&
 * OR ou ||
 * NOT ou !
 *
 * É possível usar um desses dois para fazer a lógica.
 *
 * if (conditional) {
 *     #code...
 * } else if (conditional) {
 *     #code...
 * } else {
 *     #code...
 * }
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>IF</h1>
        <?php

        date_default_timezone_set('America/Sao_Paulo');
        $hora = date('H:1');

        if ($hora > '6:00' && $hora < '12:00'){
            echo 'Bom dia!';
        } elseif ($hora > '12:00' && $hora < '18:00'){
            echo 'Boa tarde!';
        } else {
            echo 'Boa noite!';
        }
        echo " Agora são $hora."
        ?>
    </div>

    <div style="margin-top:50px">
        <h1>SWITCH</h1>
        <?php
        /**
         * switch (variavel) {
         *     case 'outro valor':
         *     case 'valor':
         *         #code...
         *      break;
         *      default:
         *         #code...
         *      break;
         * }
         Agora, vamo testar o código!!*/

        $numero = rand(0,3);
        switch($numero){
            case 0:
                echo 'Número 0';
                break;
            case 1:
                echo "Número $numero";
                break;
            case 2:
                echo "Número entre 1 e 3";
                break;
            default:
                echo "Número 3";
                break;
        }

        ?>

    </div>

    <div style="margin-top:50px">
        <h1>MATCH</h1>
        <h3>Substituindo o switch</h3>
        <p>
            <?php
            /**
             * $match ($numero){
             *1 => '';
             *default => blablabla;
             * }
             */

            $num = rand(0,3);
            $saudacao = match($num) {
                0, 1 => "Número $num",
                3 => "Número $num",
                default => 'Número maior que 1 e menor que 3'
            };

            echo $saudacao;
            ?>
        </p>

        <hr>
        <h1>Substituindo o IF</h1>
        <p>
            <?php

            $hora = date('H:i');
                $saudacao = match(true) {
                    $hora > '6:00' && $hora < '12:00' => 'Bom dia!',
                    $hora > '12:00' && $hora < '18:00' => 'Boa tarde!',
                    default => 'Boa noite!'
                };

                echo " Agora são $hora.";
            ?>
        </p>

    </div>
    
</body>
</html>
