<?php

declare(strict_types=1);

namespace PalindromeNumber;

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

$s = new Solution();

var_dump($s->isPalindrome(121));
var_dump($s->isPalindrome(123));
var_dump($s->isPalindrome(-121));
