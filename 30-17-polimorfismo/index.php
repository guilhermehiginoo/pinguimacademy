<?php $title = 'Polimorfismo' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>

    <h1><?= $title ?></h1>

    <?php

    abstract class Animal
    {
        protected $isMoving = false;

        public function mover(): static
        {
            $this->isMoving = true;

            return $this;
        }

        public abstract function emitirSom(): string;
    }

    class Humano extends Animal
    {
        public function emitirSom(): string
        {
            return 'faz o L';
        }
    }


    class Passaro extends Animal
    {
        protected bool $isFlying = false;

        public function fly(){
            $this->isFlying = true;

            parent::mover();
        }
        public function emitirSom(): string
        {
            return 'piu piu';
        }


    }

    class Corvo extends Passaro
    {
        public function emitirSom(): string{
            return 'CAWG CAWG';
        }
    }


    ?>

    <div style="margin-top:50px">

        <?php

        echo '<h2>Humano</h2>';
        $humano = new Humano();


        $humano->mover();

        echo $humano->emitirSom();

        echo '<br><br>';

        var_dump($humano);

        ?>

    </div>

    <div style="margin-top:50px">

        <?php

        echo '<h2>Pássaro</h2>';
        $passaro = new Passaro();


        $passaro->fly();

        echo $passaro->emitirSom();

        echo '<br><br>';

        var_dump($passaro);

        ?>

    </div>

    <div style="margin-top:50px">

        <?php

        echo '<h2>Corvo extendido de Pássaro</h2>';
        $corvo = new Corvo();


        $corvo->fly();

        echo $corvo->emitirSom();

        echo '<br><br>';

        var_dump($corvo);

        ?>

    </div>

</body>
</html>