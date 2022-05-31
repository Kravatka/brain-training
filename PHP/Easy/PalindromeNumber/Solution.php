<?php

declare(strict_types=1);

class Solution {
    function isPalindrome(int $x): bool
    {
        if ($x < 0) {
            return false;
        }

        $r = 0;
        $n = $x;

        while ($x > 0)
        {
            $r = $r * 10;
            $r = $r + $x % 10;
            $x = floor($x/10);
        }

        return ($n === $r);
    }
}

$solution = new TwoSum\Solution();

var_dump($solution->isPalindrome(121));
//var_dump($solution->isPalindrome(123));
//var_dump($solution->isPalindrome(-121));
