<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Greetings;

$greetings = new Greetings();
echo $greetings->message('FLAMENGOOOOO');
