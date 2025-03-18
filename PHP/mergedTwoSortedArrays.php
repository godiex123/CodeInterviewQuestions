<?php

class Solution {

    function merge(array &$nums1, int $m, array $nums2, int $n): void
    {
        /*if ($m == 0) return $nums1 = $nums2;
        $n_element = 0;
        $m_element = 0;
        array_splice($nums1, $m);
        for ($i = 0; $i < $n; $i++) {
            $n_element = $nums2[$i];
            for ($j = 0; $j < $m; $j++) {
                $m_element = $nums1[$j];
                if ($n_element <= $m_element) {
                    array_splice($nums1, $j, 0, $n_element);
                    $m++;
                    unset($nums2[$i]);
                    break;
                }
            }
        }

        if (count($nums1) > 0) {
            $nums1 = array_merge($nums1, $nums2);
        }

        return $nums1;*/

        array_splice($nums1, $m);
        array_splice($nums2, $n);
        $nums1 = array_merge($nums1, $nums2);
        sort($nums1, SORT_NUMERIC);
    }
}

$solution = new Solution();
#$nums1 = [1,2,3,0,0,0];
#$nums2 = [2,5,6];

#$nums1 = [4,0,0,0,0,0];
#$nums2 = [1,2,3,5,6];

$nums1 = [-1,0,1,1,0,0,0,0,0];
$nums2 = [-1,0,2,2,3];

$solution->merge($nums1, 4, $nums2, 5);
print_r($nums1);