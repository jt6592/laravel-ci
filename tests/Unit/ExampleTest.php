<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\My\Service\TestService;

class ExampleTest extends TestCase
{
     /**
     * @dataProvider data
     */
    public function testFizzBuzz($input, $expect)
    {
        $newTest = new TestService();

        $this->assertSame($expect , $newTest->getFizzBuzz($input) );

    }

    public function data()
    {
        return [
            [ "1", "1" ],
            [ "7", "fizz" ],
            [ "14", "fizz" ],
            [ "11", "buzz" ],
            [ "22", "buzz" ],
            [ "77", "fizzbuzz" ],
            [ "154", "fizzbuzz" ]
        ];
    }
}
