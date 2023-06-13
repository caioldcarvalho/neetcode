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

            if (isset($aux[$num])) return true;
        }

        return false;
    }
}