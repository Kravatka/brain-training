<?php

namespace TwoSum;

class Solution
{
    function twoSum(array $nums, int $target): array
    {
        foreach ($nums as $key => $value) {
            unset($nums[$key]);
            $nextKey = array_search(($target - $value), $nums);
            if ($nextKey && $nextKey) {
                return [$key, $nextKey];
            }
        }
        return [];
    }
}

$s = new Solution();

var_dump($s->twoSum([2,7,11,15], 9));