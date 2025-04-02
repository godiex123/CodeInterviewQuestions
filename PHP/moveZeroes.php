<?php

/**
 * Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.
 * Note that you must do this in-place without making a copy of the array.
 *
 * // Input: nums = [0,1,0,3,12]
 *
 * // Output: [1,3,12,0,0]
 *
 * // Input: nums = [0]
 *
 * // Output: [0]
 */

class Solution
{
    /**
     * Time complexity: better case O(N) worst case O(N2)
     * Space complexity: O(1)
     *
     * unset($array[$key]) en un array asociativo → O(1).
     * unset($array[$key]) en un array indexado, con necesidad de recorrer o reindexar → O(N) en el peor caso.
     * Si unset() ocurre dentro de un bucle que recorre el array, la reindexación puede acumularse y volverse O(N²)
     * */
    public function moveZeroes(array $nums): array
    {
        if (count($nums) > 1 && array_sum($nums) > 0) {
            foreach ($nums as $key => $value) { // O(N)
                if ($value === 0) {
                    $nums[] = $value; // Añadir al final (posible realocación)
                    unset($nums[$key]); // O(1) pero puede causar O(N) si hay reindexación
                }
            }
        }
        return $nums;
    }
}

$solution = new Solution();
print_r(
    $solution->moveZeroes([0,1,0,3,12])
);

print_r(
    $solution->moveZeroes([0])
);