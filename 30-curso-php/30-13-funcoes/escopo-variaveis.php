<?php

declare(strict_types=1);

$titulo = require "config/titulo.php";

echo "$titulo <br>";
function ola(string $nome): string {
    global $titulo;
    echo "$titulo <br>";

    // para que o titulo (dentro da function) assuma o valor de $titulo fora da function, é necessário usar global $titulo;
    // essa variável $titulo está dentro somente desse escopo
    return "Olá $titulo $nome <br>";
}

/**
 * "Definição de escopo:
 *      "O que eu defino aqui dentro é só daqui de dentro,
 *     se eu defino algo aqui de fora, é só daqui de fora e
 *     se eu preciso de algo daqui de fora aqui de dentro, ou passo como parâmetro
 *     ou defino como global".
 */

echo ola("Gui");