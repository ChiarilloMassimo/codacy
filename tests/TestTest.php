<?php

use ChiarilloMassimo\Codacy\Test;
use PHPUnit\Framework\TestCase;

/**
 * Class TestTest
 */
class TestTest extends TestCase
{
    /** @var Test  */
    protected $test;

    public function setUp()
    {
        $this->test = new Test();
    }

    public function testMethods()
    {
        $this->assertTrue($this->test->test());
        $this->assertFalse($this->test->testOps());
    }
}