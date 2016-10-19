<?php

class SumTest
{
    public function testSumEmptyArray()
    {
        $sum = new Sum();
        $this->assertEquals(0, $sum->array_sum([]));
        $this->assertEquals(5, $sum->array_sum([1, 2, 3, -1, 0]));
        $this->assertEquals(47, $sum->array_sum([47]));
    }
}

?>
