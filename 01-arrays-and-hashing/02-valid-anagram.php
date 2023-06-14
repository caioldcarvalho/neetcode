<?php

/**
 * Trying a solution without using "array_reverse()"
 */

class Solution {

    /**
     * @param string $s
     * @param string $t
     * @return bool
     */
    function isAnagram($s, $t) {
        $aux = [];
        $j = 0;
        for ($i=strlen($t)-1; $i >= 0; $i--) { 
            $aux[$j] = $t[$i];
            $j++;
        }

        return $s === implode($aux);
    }
}