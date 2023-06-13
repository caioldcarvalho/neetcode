<?php

class Solution
{

    /**
     * @param int[] $nums
     * @return bool
     */
    function containsDuplicate($nums)
    {

        $aux = $nums;

        foreach ($nums as $key => $num) {

            unset($aux[$key]);

            if (in_array($num, $aux)) return in_array($num, $aux);
        }

        return false;
    }
}