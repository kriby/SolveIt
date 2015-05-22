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
class ListsCombine
{

    /**
     * @param array $listA
     * @param array $listB
     * @return array
     */
    public function listsCombine(array $listA, array $listB)
    {
        $countA = count($listA);
        $countB = count($listB);
        $iterationsCount = $countA >= $countB ? $countA : $countB;
        for($i=0; $i < $iterationsCount; $i++) {
            if (array_key_exists($i, $listA)) {
                $result[] = $listA[$i];
            }
            if (array_key_exists($i, $listB)) {
                $result[] = $listB[$i];
            }
        }
        return $result;
    }
}