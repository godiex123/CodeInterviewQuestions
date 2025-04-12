<?php

class Solution
{
    public function isPalindrome(array $nums): bool
    {
        $j = count($nums) - 1;
        foreach ($nums as $num) {
            if ($num != $nums[$j]) return false;
            $j--;
        }
        return true;
    }
}

$solution = new Solution();
var_dump(
    $solution->isPalindrome([1,2,1])
);

var_dump(
    $solution->isPalindrome([-1,2,1])
);

var_dump(
    $solution->isPalindrome([10])
);