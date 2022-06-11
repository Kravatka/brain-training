<?php

declare(strict_types=1);

namespace ValidParentheses;

class Solution
{
    function isValid(string $s): bool
    {
        $opened = [];

        foreach (str_split($s) as $c) {
            if (in_array($c, str_split('([{'))) {
                $opened[] = $c;
            } else if ($c == ')') {
                if (array_pop($opened) !== '(') {
                    return false;
                }
            } else if ($c == ']') {
                if (array_pop($opened) !== '[') {
                    return false;
                }
            } else if ($c == '}') {
                if (array_pop($opened) !== '{') {
                    return false;
                }
            }
        }

        return count($opened) == 0;
    }
}

$s = new Solution();

var_dump($s->isValid('()[]{}'));
var_dump($s->isValid('(]'));