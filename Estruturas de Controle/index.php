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
        $hora = date('H:1');
        $hora = $hora - 3;

        if ($hora > '6:00' && $hora < '12:00'){
            echo 'Bom dia!';
        } elseif ($hora > '12:00' && $hora < '18:00'){
            echo 'Boa tarde!';
        } else {
            echo 'Boa noite!';
        }
        echo "Agora são $hora."
        ?>
    </div>
    
</body>
</html>


