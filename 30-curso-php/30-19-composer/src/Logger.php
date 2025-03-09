<?php

namespace App;
use Monolog\Level;
use Monolog\Handler\StreamHandler;
class Logger
{
    protected \Monolog\Logger $logger;
    public function __construct() {
        $this->logger = new \Monolog\Logger('app');
        $this->logger->pushHandler(
            new StreamHandler( __DIR__ . '/../storage/logs/app.log', Level:: Debug));
    }
    public function write(string $message): void
    {
        $this->logger->Debug($message);
    }
}