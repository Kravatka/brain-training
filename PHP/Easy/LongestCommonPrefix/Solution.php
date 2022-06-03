<?php

namespace LongestCommonPrefix;

class Solution
{
    function longestCommonPrefix(array $strs): string
    {
        if (count($strs) <= 0) {
            return '';
        }

        $prefix = $strs[0];
        $count = count($strs);

        for ($i = 0; $i < $count; $i++) {
            if ($prefix !== '' && strpos($strs[$i], $prefix) !== 0) {
                $prefix = substr($prefix, 0, -1);
                $i--;
            }
        }

        return $prefix;
    }
}

$s = new Solution();

var_dump($s->longestCommonPrefix(["flower","flow","flight"]));
var_dump($s->longestCommonPrefix(["dog","racecar","car"]));