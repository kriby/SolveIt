<?php

namespace SolveIt\Problem1;

/**
 * Problem 1:
 *
 * Write three functions that compute the sum of the numbers in a given list using:
 * 1. A for-loop.
 * 2. A while-loop.
 * 3. Recursion.
 */
Class CalculateSumTest extends \PHPUnit_Framework_TestCase
{
    private $model;

    protected function setUp()
    {
        $this->model = new CalculateSum();
    }

    /**
     *
     * @dataProvider provider
     * @param $input
     * @param $result
     */
    public function testSumForLoop($input, $result)
    {
        \PHPUnit_Framework_TestCase::assertEquals($result, $this->model->sumForLoop($input));
        \PHPUnit_Framework_TestCase::assertEquals($result, $this->model->sumWhileLoop($input));
        \PHPUnit_Framework_TestCase::assertEquals($result, $this->model->sumRecursive($input));
    }

    public function provider()
    {
        return [
            [[1, 7.34, 36], 44.34],
            [[-2, -5, 4], -3],
            [[5], 5],
            [[], 0]
        ];
    }
}