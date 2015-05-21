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
class CalculateSum
{
    /**
     * 1. A for-loop.
     *
     * @param array $input
     * @return int|float
     * @throws \Exception
     */
    public function sumForLoop(array $input)
    {
        $sum = 0;
        if(empty($input)) {
            return $sum;
        }
        $digitscount = count($input);
        for($i = 0; $i < $digitscount; $i++) {
            $sum += $input[$i];
        }
        return $sum;
    }

    /**
     * 1. A while-loop.
     *
     * @param mixed $input
     * @return int|float
     * @throws \Excep
     */
    public function sumWhileLoop($input)
    {
        $sum = 0;
        $i = 0;
        $digitscount = count($input);
        while($i < $digitscount) {
            $sum += $input[$i];
            $i++;
        }
        return $sum;
    }

    /**
     * 1. A recursive function.
     *
     * @param mixed $input
     * @return int|float
     * @throws \Exception
     */
    public function sumRecursive($input)
    {
        $sum = 0;
        if(empty($input)) {
            return $sum;
        }
        return array_shift($input) + $this->sumRecursive($input);
    }
}