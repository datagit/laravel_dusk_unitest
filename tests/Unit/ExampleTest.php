<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class ExampleTest
 * @package Tests\Unit
 */
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasic_condition_true()
    {
        $this->assertTrue(true);
    }

    //Instead of implementing a method for use with @dataProvider, you can define a data set using the @testWith annotation.
    /**
     * @param string $input
     * @param int $expectedLength
     *
     * @testWith    ["test", 4]
     *              ["longer-string", 13]
     */
    public function testStringLength(string $input, int $expectedLength)
    {
        $this->assertEquals($expectedLength, strlen($input));
    }
}
