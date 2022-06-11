<?php

declare(strict_types=1);

namespace RemoveElement;

class Solution
{
    function removeElement(array &$nums, int $val): int
    {
        while (array_search($val, $nums)) {
            unset($nums[array_search($val, $nums)]);
        }

        return count($nums);
    }
}

$s = new Solution();
$nums = [0,1,2,2,3,0,4,2];
var_dump($s->removeElement($nums, 2));
$s->removeElement($nums, 2);
var_dump($nums);