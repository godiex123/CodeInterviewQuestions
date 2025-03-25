<?php

class Solution {

    function maxSubArray(array $nums) {
        $largestSum = $nums[0];
        $currentSum = 0;
        foreach ($nums as $num) {
            $currentSum += $num;
            if ($num > $currentSum) {
                $currentSum = $num;
            }
            if ($currentSum > $largestSum) {
                $largestSum = $currentSum;
            }
        }
        return $largestSum;
    }
}

$solution = new Solution();
$test1 = [-2,1,-3,4,-1,2,1,-5,4]; // 6
$test2 = [1]; // 1
$test3 = [5,4,-1,7,8]; // 23
$test4 = [-2,1]; // 1
$test5 = [-1,2,2,-3]; // 4
echo $solution->maxSubArray($test5);