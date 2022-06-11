<?php

declare(strict_types=1);

namespace RomanToInteger;

class Solution
{
    function romanToInt($s): int
    {
        $n = ["I" => 1, "V" => 5, "X" => 10, "L" => 50, "C" => 100, "D" => 500, "M" => 1000];
        $c = str_split($s);
        $r = 0;

        foreach (array_reverse($c) as $k => $v) {
            if (isset($c[$k + 1]) && $n[$c[$k + 1]] > $n[$c[$k]]) {
                $r -= $n[$c[$k]];
            } else {
                $r += $n[$c[$k]];
            }
        }
        return $r;
    }
}

$s = new Solution();

var_dump($s->romanToInt("III"));
var_dump($s->romanToInt("LVIII"));
var_dump($s->romanToInt("MCMXCIV"));