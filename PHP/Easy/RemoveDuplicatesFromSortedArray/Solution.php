<?php

declare(strict_types=1);

class Solution
{
    function removeDuplicates(array &$nums): int
    {
        $index = 0;
        $prev = NULL;

        foreach($nums as $key => $num) {
            unset($nums[$key]);
            if($num !== $prev){
                $nums[$index] = $num;
                $prev = $num;
                $index++;
            }
        }

        return $index;
    }
}

$s = new Solution();
$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
$s->removeDuplicates($nums);
var_dump($nums);