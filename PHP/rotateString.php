<?php

class Solution {

    /**
     * @param String $s
     * @param String $goal
     * @return Boolean
     */
    function rotateString(string $s, string $goal): bool {
        // opcion 1
        /*$i = 0;
        while ($i < strlen($s)) {
            $leftmost = $s[0];
            $s = substr($s, 1) . $leftmost;
            if ($s == $goal) {
                return true;
            }
            $i++;
        }
        return false;*/

        // opcion 2
        return !(strlen($s) != strlen($goal)) && str_contains($s . $s, $goal);
    }
}

$solution = new Solution();
var_dump($solution->rotateString("abcde", "cdeab"));