<?php


class Solution {

    /**
     * @param string $s
     * @param string $t
     * @return bool
     */
    function isAnagram($s, $t) {
        if (strlen($s) !== strlen($t)) return false;

        $sumS = $sumT = 0;
        
        for ($i = 0; $i < strlen($s); $i++) {
            $sumS = $sumS + ord($s[$i]);
            $sumT = $sumT + ord($t[$i]);
        }

        return $sumS === $sumT;

    }
}