<?php
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->add(2, 2));
    }
}
