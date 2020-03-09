/**
1. Two Sum
Given an array of integers, return indices of the two numbers such that they add up to a specific target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

Example:

Given nums = [2, 7, 11, 15], target = 9,

Because nums[0] + nums[1] = 2 + 7 = 9,
return [0, 1].
*/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $arr = [];
        $arr_count = array_count_values($nums);
        foreach($nums as $key => $value) {
            $a = $target - $value;
            if (in_array($a, $nums) && $arr_count[$value] !== 2) {
                if ($a !== $value) {
                    array_push($arr, $key);
                }
            } elseif (in_array($a, $nums) && $arr_count[$value] === 2) {
                array_push($arr, $key);
            }
        }
        return $arr;
    }
}
