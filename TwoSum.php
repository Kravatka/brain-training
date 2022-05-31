class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
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
