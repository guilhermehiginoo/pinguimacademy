<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Foreach</title>
    </head>
    <body>
        <div>
            <h3>Foreach Simples</h3>

            <?php

            /**
             * foreach($array as $algumacoisa){
             *     faça uma ação
             * }
             *
             * foreach($array as $key => $value){
             *     faça alguma coisa dnv
             * }
             *
             */

            $usuarios = [
                ['nome' => 'John Doe', 'email' => 'john.doe@email.com'],
                ['nome' => 'Maria Doe', 'email' => 'maria.doe@email.com'],
            ];
            // foreach é útil para tratar array dentro de arrays
            foreach ($usuarios as $usuario) {
                echo $usuario['nome'] . ' - ' . $usuario['email'] . '<br>';
            }
            ?>
        </div>

        <div style="margin-top: 50px">
            <h3>Foreach com esteróides</h3>

            <?php
            $usuarios = [
                ['nome' => 'John Doe', 'email' => 'john.doe@email.com'],
                'Usuário B' => ['nome' => 'Maria Doe', 'email' => 'maria.doe@email.com'],
            ];

            foreach ($usuarios as $index => $usuario) {
                echo $index . ': ' . $usuario['nome'] . ' - ' . $usuario['email'] . '<br>';
            }
            ?>
        </div>
    </body>
</html>