<?php

use PHP\SingleNode;

class Solution
{
    public function removeElement(array &$nums, int $val): int
    {
        /*$count = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] != $val) {
                $count++;
                continue;
            }

            for ($j = count($nums) - 1; $j > $i; $j--) {
                if ($nums[$j] != $val) {
                    $temporal = $nums[$j];
                    $nums[$j] = $nums[$i];
                    $nums[$i] = $temporal;
                    $count++;
                    break;
                }
            }
        }
        return $count;*/
        // Shortest way
        foreach ($nums as $key => $value) {
            if ($value === $val) unset($nums[$key]);
        }
        return count($nums);
    }
}

$solution = new Solution();
$nums = [0,1,2,2,3,0,4,2]; // 5, nums = [0,1,4,0,3,_,_,_]
$val = 2;
echo $solution->removeElement($nums, $val);
print_r($nums);