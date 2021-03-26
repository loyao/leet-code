/*
 * @lc app=leetcode.cn id=26 lang=golang
 *
 * [26] 删除有序数组中的重复项
 */

// @lc code=start
func removeDuplicates(nums []int) int {
	num_len := len(nums)
	res := 1
	for i := 1; i < num_len; i++ {
		if nums[i] != nums[i-1] {
			nums[res] = nums[i]//重新定义数组，将不重复的值写进数组
			res++
		}
	}
	return res
}
// @lc code=end

