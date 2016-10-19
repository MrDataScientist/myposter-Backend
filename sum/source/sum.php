<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 19/10/2016
 * Time: 18:43
 */

class Sum
{
    public function array_sum(array $numbers)
    {
        return count($numbers) ? array_pop($numbers) + array_sum($numbers) : 0;
    }
}
