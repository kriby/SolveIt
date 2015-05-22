<?php

namespace SolveIt\Problem2;

/**
 * Problem 1:
 *
 * Write a function that combines two lists by alternatingly taking elements.
 * For example:
 * given the two lists [a, b, c] and [1, 2, 3],
 * the function should return [a, 1, b, 2, c, 3].
 */
Class ListsCombineTest extends \PHPUnit_Framework_TestCase
{
    private $model;

    protected function setUp()
    {
        $this->model = new ListsCombine();
    }

    /**
     *
     * @dataProvider provider
     * @param $listA
     * @param $listB
     * @param $result
     */
    public function testListsCombine($listA, $listB, $result)
    {
        \PHPUnit_Framework_TestCase::assertEquals($result, $this->model->listsCombine($listA, $listB));
    }

    public function provider()
    {
        return [
            [['a', 'b', 'c'], [1, 2, 3], ['a', 1, 'b', 2, 'c', 3]],
            [[-2, -5, 4], [-2, 4], [-2, -2, -5, 4, 4]],
            [['abc'], ['abc'], ['abc', 'abc']],
            [[], ['0'], ['0']],
            [[123], [], [123]]
        ];
    }
}