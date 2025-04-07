<?php

/**
 * Definition for a binary tree node.
 */
 class TreeNode {
     public $val = null;
     public $left = null;
     public $right = null;
     function __construct($val = 0, $left = null, $right = null) {
         $this->val = $val;
         $this->left = $left;
         $this->right = $right;
     }
 }
class Solution
{
    private int $maxDiameter = 0;
    function diameterOfBinaryTree(TreeNode $root): int
    {
        $this->dfs($root);
        return $this->maxDiameter;
    }

    private function dfs($root): int
    {
        if ($root === null) {
            return 0;
        }
        echo 'Valor: ' . $root->val . ' ';
        echo '-----';
        $left = $this->dfs($root->left);
        $right = $this->dfs($root->right);

        $this->maxDiameter = max($this->maxDiameter, $left + $right);
        echo 'Diametro: ' . $this->maxDiameter . ' ';
        echo '-----';

        return 1 + max($left, $right);
    }
}

$root = new TreeNode(1, new TreeNode(2, new TreeNode(4), new TreeNode(5)), new TreeNode(3));

$solution = new Solution();
print_r($solution->diameterOfBinaryTree($root));

