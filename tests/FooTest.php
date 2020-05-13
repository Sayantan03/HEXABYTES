<?php

namespace Tests;

use App\Foo;
use PHPUNIT\Framework\Testcase;

class FooTest extends Testcase
{
        public function testFoo(){
            $foo = new Foo('bar');

            $this->assertInstanceOf(Foo::class, $foo);
        }
}