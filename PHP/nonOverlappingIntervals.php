<?php

class Solution
{
    public function nonOverlappingIntervals(array $intervals): int
    {
        usort($intervals, fn($f, $s) => $f[1] - $s[1]);
        $head = $intervals[0][1];
        $count = 0;
        for ($i = 1; $i < count($intervals); $i++) {
            if ($head > $intervals[$i][0]){
                $count += 1;
            } else {
                $head = $intervals[$i][1];
            }
        }
        return $count;
    }
}

$solution = new Solution();
print_r($solution->nonOverlappingIntervals(
    [
        [1,2],
        [2,3],
        [3,4],
        [1,3]
    ]
));

print_r($solution->nonOverlappingIntervals(
    [
        [1,2],
        [1,2],
        [1,2]
    ]
));

print_r($solution->nonOverlappingIntervals(
    [
        [1,2],
        [2,3]
    ]
));