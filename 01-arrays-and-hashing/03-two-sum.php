<?php

class Solution {

/**
 * @param int[] $nums
 * @param int $target
 * @return int[]
 */
function twoSum($nums, $target) {
    echo "Target: {$target}\n";
    for ($i=0; $i <= count($nums)-1; $i++) {
        for ($j=1; $j <= count($nums)-1; $j++) { 
            echo $nums[$i] . " + " . $nums[$j] . PHP_EOL;
            if ($nums[$i] + $nums[$j] === $target) return [$i, $j];
        }
    }

    return [0, 0];
}
}