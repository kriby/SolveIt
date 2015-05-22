<?php

namespace SolveIt\Problem3;

/**
 * Write a function that computes the list of the first 100 Fibonacci numbers.
 * By definition, the first two numbers in the Fibonacci sequence are 0 and 1
 * and each subsequent number is the sum of the previous two.
 * As an example, here are the first 10 Fibonacci numbers: 0, 1, 1, 2, 3, 5, 8, 13, 21, and 34.
 */
Class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    private $model;

    protected function setUp()
    {
        $this->model = new Fibonacci();
    }

    /**
     *
     * @dataProvider provider
     * @param $number
     * @param $result
     */
    public function testListsCombine($number, $result)
    {
        \PHPUnit_Framework_TestCase::assertEquals($result, $this->model->fibonacciList($number));
    }

    public function provider()
    {
        return [
            [1, '0'],
            [2, '0, 1'],
            [10, '0, 1, 1, 2, 3, 5, 8, 13, 21, 34']
        ];
    }
}