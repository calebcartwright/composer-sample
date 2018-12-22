<?php
namespace helloworld\Test;

use PHPUnit\Framework\TestCase;
use helloworld\Greeter;

class GreeterTest extends TestCase
{

    public function testIsThereAnySyntaxError()
    {
        $var = new Greeter;
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function testSpeak()
    {
        $var = new Greeter;
        $this->assertTrue($var->speak("foo") == 'Hello World');
        unset($var);
    }
}
