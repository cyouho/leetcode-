<?php
/*
 *35. 搜索插入位置
 *给定一个排序数组和一个目标值，在数组中找到目标值，并返回其索引。如果目标值不存在于数组中，返回它将会被按顺序插入的位置。

请必须使用时间复杂度为 O(log n) 的算法。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/search-insert-position
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $left = 0;
        $right = count($nums) - 1;

        if ($target > $nums[$right]) return count($nums);
        if ($target < $nums[0]) return $left;

        while ($left <= $right) {
            $mid = intval($left + ($right - $left) / 2);
            if ($target < $nums[$mid]) {
                $right = ($mid) - 1;
            } else if ($target > $nums[$mid]) {
                $left = ($mid) + 1;
            } else {
                return $mid;
            }
        }
        return $left;
    }
}
