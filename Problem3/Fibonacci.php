<?php

namespace SolveIt\Problem3;
/**
 * Write a function that computes the list of the first 100 Fibonacci numbers.
 * By definition, the first two numbers in the Fibonacci sequence are 0 and 1
 * and each subsequent number is the sum of the previous two.
 * As an example, here are the first 10 Fibonacci numbers: 0, 1, 1, 2, 3, 5, 8, 13, 21, and 34.
 */
class Fibonacci
{
    /**
     * @param $number
     * @return string
     */
    public function fibonacciList($number)
    {
        for($i = 1; $i <= $number; $i++) {
            $result[] = $this->fibonacciNumber($i);
        }
        if(!isset($result[1])) {
            return 0;
        } else {
            return implode(', ', $result);
        }
    }

    private function fibonacciNumber($number)
    {
        if($number == 1) {
            return 0;
        } elseif($number == 2) {
            return 1;
        } else {
            return $this->fibonacciNumber($number-1) + $this->fibonacciNumber($number-2);
        }
    }
}
