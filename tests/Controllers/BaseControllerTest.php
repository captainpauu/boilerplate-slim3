<?php
/**
 * The test case examples are form phpunit documentation. You can write yours here.
 * These are just used as an example to check whether the tests runs properly.
 * You have to run npm task 'phpunit' to see its working.
 */

namespace App\Test\Controllers;


use PHPUnit\Framework\TestCase;

class BaseControllerTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertSame('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}