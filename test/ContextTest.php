<?php

namespace FebriAnandaLubis\Belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class ContextTest extends TestCase
{
    public function testContext()
    {
        $logger = new Logger(ContextTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));

        $logger->info("This is log message", ["username" => "Febri"]);
        $logger->info("Try login user", ["username" => "Febri"]);
        $logger->info("Succes login user", ["username" => "Febri"]);

        self::assertNotNull($logger);
    }

}