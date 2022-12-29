<?php

namespace FebriAnandaLubis\Belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use Monolog\Processor\HostnameProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use Monolog\Test\TestCase;

class ProcessorTest extends TestCase
{
    public function testProcessorRecord()
    {
        $logger = new Logger(ProcessorTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushProcessor(new GitProcessor());
        $logger->pushProcessor(new MemoryUsageProcessor());
        $logger->pushProcessor(new HostnameProcessor());
        $logger->pushProcessor(function ($record) {
           $record['extra']["ryzz"] = [
               "app" => "Belajar PHP Logging",
               "author" => "Febri ananda lubis"
           ];
            return $record;
        });

        $logger->info("Hello World", ["username" => "Febri"]);

        self::assertNotNull($logger);
    }

}