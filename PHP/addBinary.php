<?php
class Solution {

    function addBinary(string $a, string $b): string {
        $la = strlen($a) - 1;
        $lb = strlen($b) - 1;
        $carry = 0;
        $binary = '';
        while ($la >= 0 OR $lb >= 0 OR $carry > 0) {
            $x = $la >= 0 ? intval($a[$la]) : 0;
            $y = $lb >= 0 ? intval($b[$lb]) : 0;
            $sum = $carry + $x + $y;
            $carry = intdiv($sum, 2);
            $binary = ($sum % 2) . $binary;
            $la--;
            $lb--;
        }
        return $binary;
    }
}

$solution = new Solution();
echo $solution->addBinary("1010", "1011");