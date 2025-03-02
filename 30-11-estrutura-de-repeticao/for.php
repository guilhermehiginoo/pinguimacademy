<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Estruturas de Repetição</title>
    </head>
    <body>
        <div>
            <h3>For Positivo</h3>
            <?php
            for ($i = 0; $i < 10; $i++) {
                echo "$i <br>";
            }
            ?>
        </div>

        <div style="margin-top: 50px">
            <h3>For Negativo</h3>
            <?php
            for ($i = 1000; $i > 990; $i--) {
                echo "$i <br>";
            }
            ?>
        </div>

        <div style="margin-top: 50px">
            <h3>For: Arrays e Indices</h3>
            <?php
            $frutas = ['maçã', 'banana', 'melancia'];

            for ($i = 0; $i < count($frutas); $i++) {
                echo $frutas[$i] . "<br>";
            }
            ?>
        </div>
    </body>
</html>