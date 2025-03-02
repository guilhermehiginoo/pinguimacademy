<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Do/While</title>
    </head>
    <body>
        <div>
            <h3>Do/While</h3>
            <?php
            $numero = 0;

            do {
                echo $numero . '<br>';

                $numero++;
            } while ($numero < 10);
            ?>
        </div>

        <div style="margin-top: 50px">
            <h3>Do/While com true/false</h3>

            <?php
            $numero = 0;
            $continua = true;

            do {
                echo $numero . '<br>';

                $numero++;

                if ($numero == 10) {
                    $continua = false;
                }
            } while ($continua);
            ?>
        </div>
    </body>
</html>