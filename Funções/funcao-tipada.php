<?php

declare(strict_types=1);

function soma(int $a, int $b): int {
    return $a + $b;
}
// a função espera que eu retorne um int, se eu retornar qualquer outro tipo, dá um erro
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções Tipadas</title>
</head>
<body>
    <h1>Funções Tipadas</h1>

    <?php
        echo soma(rand(10,50), rand(51,90));

        echo

    ?>

</body>
</html>
