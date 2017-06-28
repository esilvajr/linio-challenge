<?php

namespace Tests;

use Linio\Responsibility\Multiple\MultipleOf3;
use Linio\Responsibility\Multiple\MultipleOf3And5;
use Linio\Responsibility\Multiple\MultipleOf5;
use PHPUnit\Framework\TestCase;

class ResponsibilityTest extends TestCase
{
    /**
     *
     */
    public function testExpectLinioText()
    {
        $multipleResponsibility = new \Linio\Responsibility\MultipleResponsibility();
        $actual = $multipleResponsibility->client(6);
        $this->assertEquals(MultipleOf3::TEXT, $actual);
    }

    /**
     *
     */
    public function testExpectITText()
    {
        $multipleResponsibility = new \Linio\Responsibility\MultipleResponsibility();
        $actual = $multipleResponsibility->client(10);
        $this->assertEquals(MultipleOf5::TEXT, $actual);
    }

    /**
     *
     */
    public function testExpectLinianosText()
    {
        $multipleResponsibility = new \Linio\Responsibility\MultipleResponsibility();
        $actual = $multipleResponsibility->client(15);
        $this->assertEquals(MultipleOf3And5::TEXT, $actual);
    }

    /**
     *
     */
    public function testExpectNumber()
    {
        $multipleResponsibility = new \Linio\Responsibility\MultipleResponsibility();
        $actual = $multipleResponsibility->client(1);
        $this->assertEquals(1, $actual);
    }
}
