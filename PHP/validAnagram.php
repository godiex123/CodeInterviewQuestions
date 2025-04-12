<?php

class Solution
{
    public function isAnagram(string $s, string $t): bool
    {
        if (strlen($s) !== strlen($t)) return false;
        return count_chars($s, 1) === count_chars($t, 1);
    }
}

$solution = new Solution();
$s = 'anagram';
$t = '';
var_dump($solution->isAnagram($s, $t));