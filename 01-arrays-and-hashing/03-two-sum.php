<?php

class Solution {

/**
 * @param int[] $nums
 * @param int $target
 * @return int[]
 */
function twoSum($nums, $target) {
    $count = count($nums)-1;
    for ($i=0; $i <= $count; $i++) {
        for ($j=1; $j <= $count; $j++) { 
            echo $nums[$i] . " + " . $nums[$j] . PHP_EOL;
            if ($nums[$i] + $nums[$j] === $target) return [$i, $j];
        }
    }

    return [0, 0];
}
}