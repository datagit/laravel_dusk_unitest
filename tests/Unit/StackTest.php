<?php
/**
 * Created by PhpStorm.
 * User: daomanhdat
 * Date: 11/28/18
 * Time: 9:32 AM
 */

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use test\Mockery\Fixtures\EmptyTestCaseV5;


class StackTest extends TestCase
{
    protected $stack;

    protected function setUp()
    {
        $this->stack = [];
    }

    protected function tearDown()
    {
        unset($this->stack);
    }

    public function testEmpty()
    {
        $this->assertTrue(empty($this->stack));
    }

    public function testPush()
    {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', $this->stack[count($this->stack) - 1]);

        $this->assertFalse(empty($this->stack));
    }

    public function testPop()
    {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', array_pop($this->stack));

        $this->assertTrue(empty($this->stack));
    }

}
