<?php
use tarik\Counter;
class CounterTest extends PHPUnit_Framework_TestCase
{
    public function testEmptyNoNumbersAdded()
    {
        $counter = new Counter();
        $this->assertEmpty($counter->getCounter());
    }
    public function testNotEmptyIsNumber()
    {
        $counter = new Counter();
        $counter->count(1);
        $counter->count(1);
        $counter->count(3);
        $counter->count(2);
        $this->assertEquals('1: 2, 3: 1, 2: 1', $counter->getCounter());
    }
}
