<?php

class Solution {

/**
 * @param string[] $strs
 * @return string[][]
 */
function groupAnagrams($strs) {
    $matrix = [];
    foreach ($strs as $str) {
        $sum = 0;
        for ($i=0; $i < strlen($str); $i++) { 
            $sum += ord($str[$i]);
        }

        if (in_array($sum, $matrix)) continue;
        $matrix[$sum][] = $str;
    }

    return $matrix;
}
}