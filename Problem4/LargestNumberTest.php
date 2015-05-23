<?php

namespace SolveIt\Problem4;
use PHPUnit_Framework_TestCase;

/**
 * Write a function that given a list of non negative integers,
 * arranges them such that they form the largest possible number.
 * For example, given [50, 2, 1, 9], the largest formed number is 95021.
 */
Class LargestNumberTest extends PHPUnit_Framework_TestCase
{
    private $model;

    protected function setUp()
    {
        $this->model = new LargestNumber();
    }

    /**
     *
     * @dataProvider provider
     * @param array $numbers
     * @param int $result
     */
    public function testLargestNumber($numbers, $result)
    {
        PHPUnit_Framework_TestCase::assertEquals($result, $this->model->largestNumber($numbers));
    }

    public function provider()
    {
        return [
            [[50, 9, 2, 1], 95021],
            [[51, 51, 52, 6], 6525151],
            [[54, 545], 54554],
            [[54, 543], 54543],
        ];
    }
}