<?php

declare(strict_types=1);

namespace SearchInsertPosition;

class Solution
{
    function searchInsert(array $nums, int $target): int
    {
        $length = count($nums);

        if ($nums[$length-1] < $target) return $length;

        for ($i=0; $i < $length; $i++) {
            if ($target <= $nums[$i]) {
                return $i;
            }
        }

        return $length;
    }
}


$s = new Solution();

var_dump($s->searchInsert([1,3,5,6], 5));
var_dump($s->searchInsert([1,3,5,6], 7));