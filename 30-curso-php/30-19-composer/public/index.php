<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Greetings;
use App\Logger;

$greetings = new Greetings();
echo $greetings->message('FLAMENGOOOOO');

(new Logger())->write('Flamengo acessou a aplicação');