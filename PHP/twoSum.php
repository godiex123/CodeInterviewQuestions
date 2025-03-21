<?php

class Solution
{
    public function twoSum(array $num, int $target): array // O(N)
    {
        $map = []; // O(N) espacial
        foreach ($num as $key => $value) { // O(N) temporal
            $complement = $target - $value; // O(1)
            if(isset($map[$complement])) { // O(1)
                return [$map[$complement], $key]; // O(1)
            }
            $map[$value] = $key; // O(N)
        }
        return [];
    }
}

$solution = new Solution();
print_r(
    $solution->twoSum([2,7,11,15], 9)
);

print_r(
    $solution->twoSum([3,2,4], 6)
);

print_r(
    $solution->twoSum([3,3], 6)
);