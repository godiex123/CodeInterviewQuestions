<?php

class Solution
{
    public function mostFrequentElement(array $nums): ?int
    {
        if (empty($nums)) return null;
        $nums = array_count_values($nums);
        return array_search(max($nums), $nums);
    }
}

$solution = new Solution();
#$nums = [1,3,1,3,2,1];
#$nums = [3, 3, 1, 3, 2, 1];
#$nums = [];
#$nums = [0];
$nums = [0, -1, 10, 10, -1, 10, -1, -1, -1, 1];
print_r($solution->mostFrequentElement($nums));