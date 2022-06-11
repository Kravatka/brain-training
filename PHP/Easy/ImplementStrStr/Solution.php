<?php

declare(strict_types=1);

namespace ImplementStrStr;

class Solution
{
    function strStr(string $haystack, string $needle): int
    {
        $str_len = strlen($haystack);
        $needle_len = strlen($needle);
        $i = 0;
        $j = 0;
        $k = 0;

        while ($i < $str_len) {
            if ($haystack[$i] === $needle[$j]) {
                while ($j < $needle_len) {
                    $k++;
                    $j++;
                    if (!isset($haystack[$i + $k]) || !isset($needle[$j])) {
                        break;
                    }
                    if ($haystack[$i + $k] !== $needle[$j]) {
                        break;
                    }
                }
                if ($j === $needle_len) {
                    return $i;
                }
                $k = 0;
                $j = 0;
            }
            $i++;
        }
        return -1;
    }
}

$s = new Solution();

var_dump($s->strStr('hello', 'll'));