<?php

class Solution
{
    function containsDuplicate(array $nums): bool
    {
        // opcion 1 -> O(N2)
        /*foreach (array_count_values($nums) as $value) {
            if ($value > 1) return true;
        }
        return false;*/

        // opcion 2
        $mapper = [];
        foreach ($nums as $num) {
            if (isset($mapper[$num])) return true;
            $mapper[$num] = 1;
        }
        return false;
    }
}

$solution = new Solution();
var_dump($solution->containsDuplicate([1,2,3,1]));