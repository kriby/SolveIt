<?php

namespace SolveIt\Problem4;
/**
 * Write a function that given a list of non negative integers,
 * arranges them such that they form the largest possible number.
 * For example, given [50, 2, 1, 9], the largest formed number is 95021.
 */
class LargestNumber
{
    /**
     * @param array $numbers
     * @return int
     */
    public function largestNumber(array $numbers)
    {
        usort($numbers, array('\SolveIt\Problem4\LargestNumber', 'cmp'));
        return (int) implode('', $numbers);
    }

    /**
     * @param $a
     * @param $b
     * @return int
     */
    private function cmp($a, $b)
    {
        if (($a . $b) == ($b . $a)) {
            return 0;
        }
        return (($a . $b) > ($b . $a)) ? -1 : 1;
    }
}
$l = new LargestNumber();
echo $l->largestNumber([545, 54, 50, 9, 1]);
