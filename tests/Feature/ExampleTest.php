<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\My\Service\TestService;
use Mockery\MockInterface;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFizzBuzz1()
    {
        $response = $this->get('/fizzbuzz');

        // dd($response);

        $response->assertStatus(200);
    }

    /**
     * @dataProvider data
     */
    public function testFizzBuzz2($input, $expect)
    {
        $this->mock(TestService::class, function (MockInterface $mock) {
            $mock->shouldReceive('getFizzBuzz')->once();
        });

        $response = $this->get("/fizzbuzz/$input");
    }

    public function data()
    {
        return [
            [ "1", "1" ],
            [ "3", "fizz" ],
            [ "6", "fizz" ],
            [ "5", "buzz" ],
            [ "10", "buzz" ],
            [ "15", "fizzbuzz" ],
            [ "30", "fizzbuzz" ]
        ];
    }
}
