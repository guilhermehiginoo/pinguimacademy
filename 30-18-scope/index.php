<?php
$title = 'Scope Resolution Operator'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
<h1><?= $title ?></h1>

<div>
    <h2>Constantes</h2>
    <?php

    class MyExampleWithConstants
    {
        public const MY_CONSTANT = 'Example with constants';
        // se eu colocar uma tag protected ou private no lugar de public, nao será possivel acessá-la
    }

    ?>
    <br><br>
    <?= MyExampleWithConstants::MY_CONSTANT ?>


</div>

<div style="margin-top: 50px">
    <h2>Self</h2>
    <?php

    class MyExampleWithSelf
    {
        protected const MESSAGE = 'We are on the `self` example';

        public function showMessage(): string
        {
            return self::MESSAGE;

            /**
             * não é possível usar $this->MESSAGE;
             * o correto é return self::MESSAGE;
             */
        }

        public function anotherMessage()
        {
            return $this->showMessage();

            // nesse caso, é possível usar $this, já que a function que estou chamando dentro da própria function retorna "return self::MESSAGE;
        }
    }

    ?>
    <br><br>
    <?= (new MyExampleWithSelf())->showMessage() ?>
    <br><br>
    <?= "Agora, com a function chamando a outra function..."; ?>
    <br>
    <?= (new MyExampleWithSelf())->anotherMessage() ?>

</div>

<div style="margin-top: 50px">
    <h2>Static</h2>
    <?php

    class MySuperStaticComponent
    {
        public static function who(): string
        {
            return __CLASS__;
            // constante mágica, existem inúmeras (pesquisar depois)
            // o __CLASS__ retorna o nome da classe
        }

        public static function greetings(): string
        {
            return 'Hello from ' . static::who();
            // para que se adapte a classe que ela está, é necessário usar static
        }

        public static function greetingsWithSelf(): string
        {
            return 'Hello from ' . self::who();
            // para o self, "ela mesma" é a classe "pai", ou seja, retorna MySuperStaticComponent e não MyStaticComponent
        }
    }

    class MyStaticComponent extends MySuperStaticComponent
    {
        public static function who(): string
        {
            return __CLASS__;
        }
    }

    ?>
    <br><br>
    <?= MySuperStaticComponent::greetings() ?>
    <br><br>
    <?= MyStaticComponent::greetings() ?>
    <br><br>
    <?= MyStaticComponent::greetingsWithSelf() ?>
</div>

<div style="margin-top: 50px">
    <h2>Parent</h2>
    <?php
    class Vehicle
    {
        protected bool $started = false;

        public function startEngine(): void
        {
            $this->started = true;
        }
    }

    class Car extends Vehicle
    {
        protected $isOnNeutral = false;

        public function startEngine(): void
        {
            $this->isOnNeutral = true;

            parent::startEngine();
        }
    }
    ?>
    <br><br>
    <?php
    $car = new Car();
    var_dump($car);
    ?>
    <br><br>
    <?php
    $car->startEngine();
    var_dump($car);
    ?>
</div>

</body>
</html>