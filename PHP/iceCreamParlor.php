<?php

class Solution
{
    /*
     * Complete the 'iceCreamParlor' function below.
     *
     * The function is expected to return an INTEGER_ARRAY.
     * The function accepts following parameters:
     *  1. INTEGER m
     *  2. INTEGER_ARRAY arr
     */
    public function iceCreamParlor(int $m, array $arr): array
    {
        $mapper = [];
        for ($i= 0; $i < count($arr); $i++) {
            $complement = $m - $arr[$i];
            if (isset($mapper[$complement])) {
                return [$mapper[$complement], $i + 1];
            }
            $mapper[$arr[$i]] = $i + 1;
        }
        return [];
    }
}

$solution = new Solution();

$m = 6;
$arr = [1,3,4,5,6];
print_r($solution->iceCreamParlor($m, $arr));

$m = 4;
$arr = [1, 4, 5, 3, 2];
print_r($solution->iceCreamParlor($m, $arr));

$m = 4;
$arr = [2, 2,4, 3];
print_r($solution->iceCreamParlor($m, $arr));