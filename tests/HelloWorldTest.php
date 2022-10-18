<?php

declare(strict_types=1);

use App\HelloWorld;
use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase
{
    public function testPrintHelloWorld(): void
    {
        $this->expectOutputString((new HelloWorld)->say());
        print 'Hello World' . PHP_EOL;
    }

    public function testPrintHelloWorldSengajaSalah(): void
    {
        $this->expectOutputString((new HelloWorld)->say());
        print 'Hello World';
    }
}
