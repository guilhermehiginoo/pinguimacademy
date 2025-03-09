<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha aula de PHP</title>
</head>
<body>
    <h1>
        <?php
            // como definir variável
            // com sinal de $ (dólar)
            $saudacao = "Olá";
            $localidade = "Mundo";

            // como printar
            echo "Olá mundo!!!!! ";

            $numero = 1;

            // como printar com variáveis
            echo $saudacao . " " . $localidade;
            // variavel + ponto + string vazia pra o espacamento + ponto + variavel

            // com aspas simples o compilador entende que é apenas uma string simples e não coloca o valor real da variavel
            //exemplo: '$saudacao $localidade';

            // o correto é com aspas duplas

            $saudacao = "Teste";
            echo $saudacao . " " . $localidade;
        ?>
    </h1>
</body>
</html>